<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Tests;

use Andy87\ClientsHh\ApiClientHh;
use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetCurrentUserInfoPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacanciesPrompt;
use Andy87\ClientsHh\Generated\ProviderRegistry;
use Andy87\ClientsHh\HhConfig;
use Andy87\PhpClientSdk\Auth\BearerTokenAuthorizationStrategy;
use Andy87\PhpClientSdk\Auth\NullAuthorizationStrategy;
use Andy87\PhpClientSdk\Http\HttpResponse;
use Andy87\PhpClientSdk\Mock\CallbackMockResponseResolver;
use Andy87\PhpClientSdk\Mock\MockTransport;
use PHPUnit\Framework\TestCase;

/**
 * Проверяет базовую работоспособность HeadHunter-клиента.
 */
class ApiClientHhSmokeTest extends TestCase
{
    /**
     * Проверяет, что конфигурация может описывать анонимный клиент без OAuth-реквизитов.
     *
     * @return void
     */
    public function testConfigSupportsAnonymousClient(): void
    {
        $config = HhConfig::fromArray([
            'host' => 'api.hh.test',
            'prefix' => 'openapi',
            'headers' => ['HH-User-Agent' => 'php-client-hh-test'],
        ]);

        self::assertNull($config->accessToken);
        self::assertNull($config->clientId);
        self::assertNull($config->clientSecret);
        self::assertSame('https://api.hh.test/openapi', $config->getBaseUrl());
        self::assertSame(['HH-User-Agent' => 'php-client-hh-test'], $config->headers);
    }

    /**
     * Проверяет, что клиент создаётся без access token и использует provider registry.
     *
     * @return void
     */
    public function testClientCreatesWithoutAccessToken(): void
    {
        $client = new ApiClientHh(['baseUrl' => 'https://api.hh.test']);

        self::assertSame(array_keys(ProviderRegistry::providers()), $client->providerNames());
        self::assertNotSame([], $client->providerNames());

        foreach ($client->providerNames() as $providerName) {
            self::assertTrue(isset($client->{$providerName}));
            self::assertInstanceOf(BaseHhProvider::class, $client->provider($providerName));
        }
    }

    /**
     * Проверяет, что официальный OpenAPI помечает поиск вакансий global OAuth security.
     *
     * @return void
     */
    public function testVacanciesPromptRequiresAuthorizationFromGlobalSecurity(): void
    {
        self::assertTrue((new GetVacanciesPrompt())->requiresAuthorization());
    }

    /**
     * Проверяет, что приватный Prompt требует авторизацию.
     *
     * @return void
     */
    public function testPrivatePromptRequiresAuthorization(): void
    {
        self::assertTrue((new GetCurrentUserInfoPrompt())->requiresAuthorization());
    }

    /**
     * Проверяет, что access token добавляется как Bearer-заголовок только для приватного запроса.
     *
     * @return void
     */
    public function testBearerTokenIsUsedForPrivateRequest(): void
    {
        $requests = [];
        $transport = new MockTransport(new CallbackMockResponseResolver(
            static function ($request) use (&$requests): HttpResponse {
                $requests[] = $request;

                return new HttpResponse(
                    statusCode: 200,
                    headers: ['Content-Type' => 'application/json'],
                    body: '{"id":"1","email":"user@example.test"}',
                );
            },
        ));

        $client = new ApiClientHh([
            'baseUrl' => 'https://api.hh.test',
            'accessToken' => 'test-token',
        ], $transport);

        $provider = $client->provider('информацияОСоискателе');

        self::assertTrue(method_exists($provider, 'getCurrentUserInfo'));

        $method = new \ReflectionMethod($provider, 'getCurrentUserInfo');
        $method->invoke($provider, new GetCurrentUserInfoPrompt());

        self::assertCount(1, $requests);
        self::assertSame('Bearer test-token', $requests[0]->headers['Authorization'] ?? null);
    }

    /**
     * Проверяет, что без access token клиент использует пустую стратегию авторизации.
     *
     * @return void
     */
    public function testDefaultAuthorizationStrategyIsAnonymous(): void
    {
        $anonymous = new ApiClientHh(['baseUrl' => 'https://api.hh.test']);
        $authorized = new ApiClientHh(['baseUrl' => 'https://api.hh.test', 'accessToken' => 'token']);

        $anonymousReflection = new \ReflectionProperty($anonymous, 'authorizationStrategy');
        $authorizedReflection = new \ReflectionProperty($authorized, 'authorizationStrategy');

        self::assertInstanceOf(NullAuthorizationStrategy::class, $anonymousReflection->getValue($anonymous));
        self::assertInstanceOf(BearerTokenAuthorizationStrategy::class, $authorizedReflection->getValue($authorized));
    }
}
