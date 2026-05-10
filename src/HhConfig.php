<?php

declare(strict_types=1);

namespace Andy87\ClientsHh;

use Andy87\PhpClientSdk\Config\BaseUrl;

/**
 * Хранит настройки подключения к HeadHunter API.
 */
class HhConfig
{
    public const DEFAULT_BASE_URL = 'https://api.hh.ru';
    public const DEFAULT_TOKEN_URL = 'https://hh.ru/oauth/token';

    /**
     * Создаёт конфигурацию HeadHunter API.
     *
     * @param string|null $accessToken Готовый OAuth access token или null для анонимного клиента.
     * @param string|null $clientId Client ID приложения HeadHunter.
     * @param string|null $clientSecret Client Secret приложения HeadHunter.
     * @param string $baseUrl Базовый URL API.
     * @param string $tokenUrl URL получения access token.
     * @param int $timeout Таймаут HTTP-запросов.
     * @param array<string, string> $headers Дефолтные пользовательские заголовки.
     * @param string|null $protocol HTTP-протокол для сборки base URL.
     * @param string|null $host Хост API для сборки base URL.
     * @param string|null $prefix Prefix пути API для сборки base URL.
     * @param int|null $port Порт API для сборки base URL.
     *
     * @return void
     */
    public function __construct(
        public ?string $accessToken = null,
        public ?string $clientId = null,
        public ?string $clientSecret = null,
        public string $baseUrl = self::DEFAULT_BASE_URL,
        public string $tokenUrl = self::DEFAULT_TOKEN_URL,
        public int $timeout = 30,
        public array $headers = [],
        public ?string $protocol = null,
        public ?string $host = null,
        public ?string $prefix = null,
        public ?int $port = null,
    ) {
    }

    /**
     * Возвращает базовый URL API.
     *
     * @return string Базовый URL API.
     *
     * @throws \InvalidArgumentException Если составные части URL некорректны.
     */
    public function getBaseUrl(): string
    {
        if ($this->baseUrl !== self::DEFAULT_BASE_URL || $this->host === null) {
            return $this->baseUrl;
        }

        return (string) new BaseUrl(
            host: $this->host,
            protocol: $this->protocol ?? 'https',
            prefix: $this->prefix,
            port: $this->port,
        );
    }

    /**
     * Создаёт конфигурацию из массива.
     *
     * @param array<string, mixed> $data Настройки.
     *
     * @return self Конфигурация.
     *
     * @throws \InvalidArgumentException Если headers описаны некорректно.
     */
    public static function fromArray(array $data): self
    {
        $accessToken = $data['accessToken'] ?? $data['access_token'] ?? $data['HH_ACCESS_TOKEN'] ?? null;
        $clientId = $data['clientId'] ?? $data['client_id'] ?? $data['HH_CLIENT_ID'] ?? null;
        $clientSecret = $data['clientSecret'] ?? $data['client_secret'] ?? $data['HH_CLIENT_SECRET'] ?? null;
        $headers = self::headersFromArray($data['headers'] ?? []);

        return new self(
            accessToken: is_string($accessToken) && $accessToken !== '' ? $accessToken : null,
            clientId: is_string($clientId) && $clientId !== '' ? $clientId : null,
            clientSecret: is_string($clientSecret) && $clientSecret !== '' ? $clientSecret : null,
            baseUrl: (string) ($data['baseUrl'] ?? $data['base_url'] ?? self::DEFAULT_BASE_URL),
            tokenUrl: (string) ($data['tokenUrl'] ?? $data['token_url'] ?? self::DEFAULT_TOKEN_URL),
            timeout: (int) ($data['timeout'] ?? 30),
            headers: $headers,
            protocol: isset($data['protocol']) ? (string) $data['protocol'] : null,
            host: isset($data['host']) ? (string) $data['host'] : null,
            prefix: isset($data['prefix']) ? (string) $data['prefix'] : null,
            port: isset($data['port']) ? (int) $data['port'] : null,
        );
    }

    /**
     * Создаёт конфигурацию из переменных окружения.
     *
     * @param string $prefix Префикс переменных окружения.
     * @param string $suffix Суффикс набора реквизитов, например CURIES для HH_CLIENT_ID_CURIES.
     *
     * @return self Конфигурация.
     *
     * @throws \InvalidArgumentException Если headers описаны некорректно.
     */
    public static function fromEnv(string $prefix = 'HH', string $suffix = ''): self
    {
        $suffix = $suffix !== '' ? '_' . trim($suffix, '_') : '';

        return self::fromArray([
            'accessToken' => getenv($prefix . '_ACCESS_TOKEN' . $suffix) ?: null,
            'clientId' => getenv($prefix . '_CLIENT_ID' . $suffix) ?: null,
            'clientSecret' => getenv($prefix . '_CLIENT_SECRET' . $suffix) ?: null,
        ]);
    }

    /**
     * Нормализует пользовательские заголовки из массива конфигурации.
     *
     * @param mixed $headers Значение headers.
     *
     * @return array<string, string> Заголовки.
     *
     * @throws \InvalidArgumentException Если headers не являются массивом строк.
     */
    private static function headersFromArray(mixed $headers): array
    {
        if (!is_array($headers)) {
            throw new \InvalidArgumentException('Hh headers must be an array.');
        }

        $result = [];

        foreach ($headers as $name => $value) {
            if (!is_string($name) || !is_string($value)) {
                throw new \InvalidArgumentException('Hh headers must be an array<string, string>.');
            }

            $result[$name] = $value;
        }

        return $result;
    }
}
