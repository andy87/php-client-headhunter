<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Tests;

use and_y87\ClientsHh\ApiClientHh;
use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetCurrentUserInfoPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetVacanciesPrompt;
use and_y87\ClientsHh\Generated\Provider\CurrentUserProvider;
use and_y87\ClientsHh\Generated\Provider\VacancySearchProvider;
use and_y87\ClientsHh\Generated\ProviderKey;
use and_y87\ClientsHh\Generated\ProviderRegistry;
use and_y87\ClientsHh\HhConfig;
use and_y87\PhpClientSdk\Security\Authorization\Strategy\BearerTokenAuthorizationStrategy;
use and_y87\PhpClientSdk\Security\Authorization\Strategy\NullAuthorizationStrategy;
use and_y87\PhpClientSdk\Transport\Http\HttpResponse;
use and_y87\PhpClientSdk\Testing\Mock\CallbackMockResponseResolver;
use and_y87\PhpClientSdk\Testing\Mock\MockTransport;
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
        self::assertSame(array_map(static fn (ProviderKey $key): string => $key->value, ProviderKey::cases()), $client->providerNames());
        self::assertNotSame([], $client->providerNames());

        foreach ($client->providerNames() as $providerName) {
            self::assertTrue(isset($client->{$providerName}));
            self::assertInstanceOf(BaseHhProvider::class, $client->provider($providerName));
        }
    }

    /**
     * Проверяет стабильные ASCII aliases для ключевых provider-разделов.
     *
     * @return void
     */
    public function testProviderAliasesAreAsciiAndEnumBacked(): void
    {
        $client = new ApiClientHh(['baseUrl' => 'https://api.hh.test']);
        $expectedAliases = [
            ProviderKey::CurrentUser->value,
            ProviderKey::ApplicantNegotiations->value,
            ProviderKey::VacancyDetails->value,
            ProviderKey::ResumeDetails->value,
            ProviderKey::Suggestions->value,
            ProviderKey::KeywordSuggestions->value,
            ProviderKey::CompanySuggestions->value,
            ProviderKey::CommonReferenceData->value,
            ProviderKey::ResumeReferenceData->value,
            ProviderKey::SalaryReferenceData->value,
            ProviderKey::SalaryAnalytics->value,
            ProviderKey::OAuth->value,
            ProviderKey::TokenManagement->value,
        ];
        $removedAliases = [
            'applicantInfo',
            'applicantNegotiationMessages',
            'vacancies',
            'resumeView',
            'suggests',
            'keywordSuggests',
            'companySuggests',
            'commonDictionaries',
            'dictionaries',
            'salaryDictionaries',
            'salaryDatabase',
            'appAuthorization',
            'employerAuthorization',
        ];

        foreach ($client->providerNames() as $providerName) {
            self::assertMatchesRegularExpression('/^[A-Za-z][A-Za-z0-9]*$/', $providerName);
        }

        foreach ($expectedAliases as $alias) {
            self::assertContains($alias, $client->providerNames());
        }

        foreach ($removedAliases as $alias) {
            self::assertNotContains($alias, $client->providerNames());
        }

        self::assertContains(ProviderKey::VacancySearch, $client->providerKeys());
        self::assertInstanceOf(VacancySearchProvider::class, $client->provider(ProviderKey::VacancySearch));
        self::assertInstanceOf(VacancySearchProvider::class, $client->vacancySearch);
        self::assertTrue(isset($client->vacancySearch));
        self::assertFalse(isset($client->поискВакансий));
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

        $provider = $client->provider(ProviderKey::CurrentUser);

        self::assertInstanceOf(CurrentUserProvider::class, $provider);

        $provider->getCurrentUserInfo(new GetCurrentUserInfoPrompt());

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
