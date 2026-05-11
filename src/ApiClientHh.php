<?php

declare(strict_types=1);

namespace and_y87\ClientsHh;

use and_y87\ClientsHh\Generated\ProviderRegistry;
use and_y87\ClientsHh\Generated\ProviderKey;
use and_y87\PhpClientSdk\Security\Authorization\Strategy\BearerTokenAuthorizationStrategy;
use and_y87\PhpClientSdk\Security\Authorization\Strategy\NullAuthorizationStrategy;
use and_y87\PhpClientSdk\Client\Config\ClientOptions;
use and_y87\PhpClientSdk\Contracts\Auth\AuthorizationStrategyResolverInterface;
use and_y87\PhpClientSdk\Contracts\Auth\AuthorizationStrategyInterface;
use and_y87\PhpClientSdk\Contracts\Http\HttpTransportInterface;
use and_y87\PhpClientSdk\Client\Event\AfterInitEvent;
use and_y87\PhpClientSdk\Client\Event\ClientEvents;
use and_y87\PhpClientSdk\Transport\Native\NativeHttpTransport;
use and_y87\PhpClientSdk\Transport\Trace\TraceableTransport;
use and_y87\PhpClientSdk\Client\Runtime\ClientRuntime;

/**
 * Главный клиент HeadHunter API с ленивым доступом к provider-разделам.
 *
 * @property-read \and_y87\ClientsHh\Generated\Provider\ApplicantCommentsProvider $applicantComments
 * @property-read \and_y87\ClientsHh\Generated\Provider\ApplicantNegotiationsProvider $applicantNegotiations
 * @property-read \and_y87\ClientsHh\Generated\Provider\ChatsProvider $chats
 * @property-read \and_y87\ClientsHh\Generated\Provider\ClickmeStatisticsProvider $clickmeStatistics
 * @property-read \and_y87\ClientsHh\Generated\Provider\CommonReferenceDataProvider $commonReferenceData
 * @property-read \and_y87\ClientsHh\Generated\Provider\CompanySuggestionsProvider $companySuggestions
 * @property-read \and_y87\ClientsHh\Generated\Provider\CurrentUserProvider $currentUser
 * @property-read \and_y87\ClientsHh\Generated\Provider\EmployerAddressesProvider $employerAddresses
 * @property-read \and_y87\ClientsHh\Generated\Provider\EmployerInfoProvider $employerInfo
 * @property-read \and_y87\ClientsHh\Generated\Provider\EmployerManagersProvider $employerManagers
 * @property-read \and_y87\ClientsHh\Generated\Provider\EmployerNegotiationsProvider $employerNegotiations
 * @property-read \and_y87\ClientsHh\Generated\Provider\EmployerProvider $employer
 * @property-read \and_y87\ClientsHh\Generated\Provider\EmployerServicesProvider $employerServices
 * @property-read \and_y87\ClientsHh\Generated\Provider\KeywordSuggestionsProvider $keywordSuggestions
 * @property-read \and_y87\ClientsHh\Generated\Provider\ManagerInfoProvider $managerInfo
 * @property-read \and_y87\ClientsHh\Generated\Provider\OAuthProvider $oauth
 * @property-read \and_y87\ClientsHh\Generated\Provider\ResumeDetailsProvider $resumeDetails
 * @property-read \and_y87\ClientsHh\Generated\Provider\ResumeReferenceDataProvider $resumeReferenceData
 * @property-read \and_y87\ClientsHh\Generated\Provider\ResumeSearchProvider $resumeSearch
 * @property-read \and_y87\ClientsHh\Generated\Provider\SalaryAnalyticsProvider $salaryAnalytics
 * @property-read \and_y87\ClientsHh\Generated\Provider\SalaryReferenceDataProvider $salaryReferenceData
 * @property-read \and_y87\ClientsHh\Generated\Provider\SavedResumeSearchesProvider $savedResumeSearches
 * @property-read \and_y87\ClientsHh\Generated\Provider\SuggestionsProvider $suggestions
 * @property-read \and_y87\ClientsHh\Generated\Provider\TokenManagementProvider $tokenManagement
 * @property-read \and_y87\ClientsHh\Generated\Provider\VacancyDetailsProvider $vacancyDetails
 * @property-read \and_y87\ClientsHh\Generated\Provider\VacancyDraftsProvider $vacancyDrafts
 * @property-read \and_y87\ClientsHh\Generated\Provider\VacancyManagementProvider $vacancyManagement
 * @property-read \and_y87\ClientsHh\Generated\Provider\VacancySearchProvider $vacancySearch
 * @property-read \and_y87\ClientsHh\Generated\Provider\WebhookApiProvider $webhookApi
 */
class ApiClientHh
{
    public const EVENTS = 'events';
    public const HEADERS = 'headers';
    public const AUTHORIZATION_RESOLVER = 'authorizationResolver';
    public const REFRESH_AUTHORIZATION_STATUS_CODES = 'refreshAuthorizationStatusCodes';
    public const TRACEABLE_TRANSPORT = 'traceableTransport';

    public const EVENT_AFTER_INIT = ClientEvents::AFTER_INIT;
    public const EVENT_BEFORE_REQUEST = ClientEvents::BEFORE_REQUEST;
    public const EVENT_AFTER_REQUEST = ClientEvents::AFTER_REQUEST;
    public const EVENT_REQUEST_EXCEPTION = ClientEvents::REQUEST_EXCEPTION;

    /** @var array<string, BaseHhProvider> Созданные provider-разделы. */
    private array $providers = [];

    /** @var string Базовый URL HeadHunter API. */
    private string $baseUrl;

    /** @var AuthorizationStrategyInterface Стратегия авторизации. */
    private AuthorizationStrategyInterface $authorizationStrategy;

    /** @var HttpTransportInterface HTTP-транспорт. */
    private HttpTransportInterface $transport;

    /** @var int Таймаут HTTP-запросов. */
    private int $timeout;

    /** @var ClientRuntime Runtime-контекст клиента. */
    private ClientRuntime $runtime;

    /** @var ClientOptions Настройки выполнения запросов. */
    private ClientOptions $options;

    /**
     * Создаёт клиент HeadHunter API.
     *
     * @param HhConfig|array<string, mixed> $config Конфигурация клиента.
     * @param HttpTransportInterface|array<string, mixed>|ClientOptions|null $transport HTTP-транспорт, ClientOptions или options вторым аргументом.
     * @param AuthorizationStrategyInterface|null $authorizationStrategy Стратегия авторизации.
     * @param array<string, mixed>|ClientOptions|null $options Options клиента, если transport передан отдельным аргументом.
     *
     * @return void
     *
     * @throws \InvalidArgumentException Если options описаны некорректно.
     */
    public function __construct(
        HhConfig|array $config,
        HttpTransportInterface|array|ClientOptions|null $transport = null,
        ?AuthorizationStrategyInterface $authorizationStrategy = null,
        array|ClientOptions|null $options = null,
    ) {
        if (is_array($transport) || $transport instanceof ClientOptions) {
            if ($authorizationStrategy !== null || $options !== null) {
                throw new \InvalidArgumentException('Options as second argument cannot be combined with authorization strategy or fourth argument options.');
            }

            $options = $transport;
            $transport = null;
        }

        $options ??= [];
        $config = is_array($config) ? HhConfig::fromArray($config) : $config;
        $this->options = $this->createClientOptions($options, $config);
        $this->runtime = new ClientRuntime(
            headers: $this->options->headers,
            events: $this->options->events,
        );
        $this->baseUrl = $config->getBaseUrl();
        $this->transport = $this->createTransport($transport ?? new NativeHttpTransport(), $options);
        $this->authorizationStrategy = $this->createAuthorizationStrategy($config, $authorizationStrategy, $options);
        $this->timeout = $this->options->timeout;
        $this->runtime->dispatch(self::EVENT_AFTER_INIT, new AfterInitEvent($this));
    }

    /**
     * Возвращает provider-раздел по имени свойства и создаёт его при первом обращении.
     *
     * @param string $name Имя provider-раздела.
     *
     * @return BaseHhProvider Provider-раздел.
     *
     * @throws \OutOfBoundsException Если раздел не зарегистрирован.
     */
    public function __get(string $name): BaseHhProvider
    {
        return $this->provider($name);
    }

    /**
     * Проверяет, зарегистрирован ли provider-раздел.
     *
     * @param string $name Имя provider-раздела.
     *
     * @return bool true, если раздел доступен.
     */
    public function __isset(string $name): bool
    {
        return array_key_exists($name, ProviderRegistry::providers());
    }

    /**
     * Возвращает provider-раздел по имени.
     *
     * @param string|ProviderKey $name Имя provider-раздела или enum-ключ.
     *
     * @return BaseHhProvider Provider-раздел.
     *
     * @throws \OutOfBoundsException Если раздел не зарегистрирован.
     */
    public function provider(string|ProviderKey $name): BaseHhProvider
    {
        $name = $name instanceof ProviderKey ? $name->value : $name;

        if (isset($this->providers[$name])) {
            return $this->providers[$name];
        }

        $providers = ProviderRegistry::providers();
        $className = $providers[$name] ?? null;

        if ($className === null) {
            throw new \OutOfBoundsException(sprintf('Hh provider "%s" is not registered.', $name));
        }

        return $this->providers[$name] = new $className(
            baseUrl: $this->baseUrl,
            authorizationStrategy: $this->authorizationStrategy,
            transport: $this->transport,
            timeout: $this->timeout,
            runtime: $this->runtime,
            options: $this->options,
        );
    }

    /**
     * Возвращает список доступных provider-разделов.
     *
     * @return list<string> Имена provider-разделов.
     */
    public function providerNames(): array
    {
        return array_keys(ProviderRegistry::providers());
    }

    /**
     * Возвращает список enum-ключей provider-разделов.
     *
     * @return list<ProviderKey> Enum-ключи provider-разделов.
     */
    public function providerKeys(): array
    {
        return ProviderKey::cases();
    }

    /**
     * Добавляет обработчик события клиента.
     *
     * @param string $eventName Имя события.
     * @param callable $listener Обработчик события.
     *
     * @return static Текущий клиент.
     */
    public function on(string $eventName, callable $listener): static
    {
        $this->runtime->on($eventName, $listener);

        return $this;
    }

    /**
     * Полностью заменяет дефолтные пользовательские заголовки.
     *
     * @param array<string, string> $headers Заголовки.
     *
     * @return static Текущий клиент.
     *
     * @throws \InvalidArgumentException Если заголовки описаны некорректно.
     */
    public function setHeaders(array $headers): static
    {
        $this->runtime->setHeaders($headers);

        return $this;
    }

    /**
     * Добавляет или перезаписывает дефолтные пользовательские заголовки.
     *
     * @param array<string, string> $headers Заголовки.
     *
     * @return static Текущий клиент.
     *
     * @throws \InvalidArgumentException Если заголовки описаны некорректно.
     */
    public function addHeaders(array $headers): static
    {
        $this->runtime->addHeaders($headers);

        return $this;
    }

    /**
     * Возвращает дефолтные пользовательские заголовки.
     *
     * @return array<string, string> Заголовки.
     */
    public function getHeaders(): array
    {
        return $this->runtime->getHeaders();
    }

    /**
     * Возвращает HTTP-транспорт клиента.
     *
     * @return HttpTransportInterface HTTP-транспорт.
     */
    public function getTransport(): HttpTransportInterface
    {
        return $this->transport;
    }

    /**
     * Возвращает диагностический transport-wrapper, если он включён.
     *
     * @return TraceableTransport|null Traceable transport или null.
     */
    public function getTraceableTransport(): ?TraceableTransport
    {
        return $this->transport instanceof TraceableTransport ? $this->transport : null;
    }

    /**
     * Создаёт настройки выполнения запросов из ClientOptions или массива options.
     *
     * @param array<string, mixed>|ClientOptions $options Options клиента.
     * @param HhConfig $config Конфигурация клиента.
     *
     * @return ClientOptions Настройки выполнения запросов.
     *
     * @throws \InvalidArgumentException Если options описаны некорректно.
     */
    private function createClientOptions(array|ClientOptions $options, HhConfig $config): ClientOptions
    {
        if ($options instanceof ClientOptions) {
            return $options;
        }

        $headers = array_merge($config->headers, $this->getOptionArray($options, self::HEADERS));

        return new ClientOptions(
            timeout: (int) ($options['timeout'] ?? $config->timeout),
            headers: $headers,
            events: $this->getOptionArray($options, self::EVENTS),
            authorizationResolver: $this->getAuthorizationResolverOption($options),
            refreshAuthorizationStatusCodes: $this->getRefreshStatusCodesOption($options),
        );
    }

    /**
     * Создаёт HTTP-транспорт с опциональной диагностической обёрткой.
     *
     * @param HttpTransportInterface $transport Исходный HTTP-транспорт.
     * @param array<string, mixed>|ClientOptions $options Options клиента.
     *
     * @return HttpTransportInterface HTTP-транспорт.
     */
    private function createTransport(HttpTransportInterface $transport, array|ClientOptions $options): HttpTransportInterface
    {
        if ($transport instanceof TraceableTransport) {
            return $transport;
        }

        if (is_array($options) && ($options[self::TRACEABLE_TRANSPORT] ?? false) === true) {
            return new TraceableTransport($transport);
        }

        return $transport;
    }

    /**
     * Создаёт стратегию авторизации по умолчанию или возвращает пользовательскую.
     *
     * @param HhConfig $config Конфигурация клиента.
     * @param AuthorizationStrategyInterface|null $authorizationStrategy Пользовательская стратегия авторизации.
     * @param array<string, mixed>|ClientOptions $options Options клиента.
     *
     * @return AuthorizationStrategyInterface Стратегия авторизации.
     *
     * @throws \InvalidArgumentException Если access token некорректен.
     */
    private function createAuthorizationStrategy(
        HhConfig $config,
        ?AuthorizationStrategyInterface $authorizationStrategy,
        array|ClientOptions $options,
    ): AuthorizationStrategyInterface {
        if ($authorizationStrategy !== null) {
            return $authorizationStrategy;
        }

        if ($config->accessToken !== null) {
            return new BearerTokenAuthorizationStrategy($config->accessToken);
        }

        return new NullAuthorizationStrategy();
    }

    /**
     * Возвращает array-option по имени.
     *
     * @param array<string, mixed> $options Options клиента.
     * @param string $name Имя option.
     *
     * @return array<string, mixed> Значение option.
     *
     * @throws \InvalidArgumentException Если option не является массивом.
     */
    private function getOptionArray(array $options, string $name): array
    {
        $value = $options[$name] ?? [];

        if (!is_array($value)) {
            throw new \InvalidArgumentException(sprintf('Option "%s" must be an array.', $name));
        }

        return $value;
    }

    /**
     * Возвращает resolver стратегии авторизации из options.
     *
     * @param array<string, mixed> $options Options клиента.
     *
     * @return AuthorizationStrategyResolverInterface|null Resolver стратегии авторизации.
     *
     * @throws \InvalidArgumentException Если option имеет некорректный тип.
     */
    private function getAuthorizationResolverOption(array $options): ?AuthorizationStrategyResolverInterface
    {
        $resolver = $options[self::AUTHORIZATION_RESOLVER] ?? null;

        if ($resolver === null || $resolver instanceof AuthorizationStrategyResolverInterface) {
            return $resolver;
        }

        throw new \InvalidArgumentException(sprintf(
            'Option "%s" must be an instance of %s.',
            self::AUTHORIZATION_RESOLVER,
            AuthorizationStrategyResolverInterface::class,
        ));
    }

    /**
     * Возвращает HTTP-статусы для refresh authorization retry.
     *
     * @param array<string, mixed> $options Options клиента.
     *
     * @return list<int> HTTP-статусы.
     *
     * @throws \InvalidArgumentException Если option имеет некорректный тип.
     */
    private function getRefreshStatusCodesOption(array $options): array
    {
        $statusCodes = $options[self::REFRESH_AUTHORIZATION_STATUS_CODES] ?? [401];

        if (!is_array($statusCodes)) {
            throw new \InvalidArgumentException(sprintf('Option "%s" must be an array.', self::REFRESH_AUTHORIZATION_STATUS_CODES));
        }

        return array_map(static function (mixed $statusCode): int {
            if (!is_int($statusCode) && !(is_string($statusCode) && ctype_digit($statusCode))) {
                throw new \InvalidArgumentException('Refresh authorization status code must be an integer.');
            }

            return (int) $statusCode;
        }, array_values($statusCodes));
    }
}
