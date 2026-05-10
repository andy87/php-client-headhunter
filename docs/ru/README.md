# PHP-клиент для HeadHunter API

Типизированный PHP-клиент для HeadHunter API. Пакет предоставляет главный клиент `ApiClientHh`, сгенерированные provider-разделы, DTO запросов, DTO ответов и schema-классы.

Клиент построен поверх `andy87/php-client-sdk` и требует PHP 8.1 или новее.

## Требования

- PHP 8.1 или новее
- Composer
- OAuth access token для защищённых методов HeadHunter

## Установка

```bash
composer require andy87/php-client-hh
```

## Быстрый старт

Анонимные методы можно вызывать без OAuth-реквизитов:

```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Andy87\ClientsHh\ApiClientHh;
use Andy87\ClientsHh\Generated\Prompt\GetVacanciesPrompt;

$client = new ApiClientHh([
    'headers' => [
        'HH-User-Agent' => 'my-app/1.0 (admin@example.com)',
    ],
]);

$prompt = new GetVacanciesPrompt();
$prompt->text = 'php developer';
$prompt->per_page = 10;

$response = $client->vacancySearch->getVacancies($prompt);

foreach ($response->items ?? [] as $vacancy) {
    echo $vacancy->name . PHP_EOL;
}
```

Защищённые методы требуют OAuth access token:

```php
<?php

use Andy87\ClientsHh\ApiClientHh;
use Andy87\ClientsHh\Generated\Prompt\GetCurrentUserInfoPrompt;
use Andy87\ClientsHh\Generated\ProviderKey;

$client = new ApiClientHh([
    'accessToken' => 'your-oauth-access-token',
    'headers' => [
        'HH-User-Agent' => 'my-app/1.0 (admin@example.com)',
    ],
]);

$response = $client->provider(ProviderKey::ApplicantInfo)->getCurrentUserInfo(new GetCurrentUserInfoPrompt());

echo $response->id . PHP_EOL;
```

## Конфигурация

Конфигурацию можно передать массивом:

```php
<?php

use Andy87\ClientsHh\ApiClientHh;

$client = new ApiClientHh([
    'access_token' => 'your-oauth-access-token',
    'base_url' => 'https://api.hh.ru',
    'token_url' => 'https://hh.ru/oauth/token',
    'timeout' => 30,
    'headers' => [
        'HH-User-Agent' => 'my-app/1.0 (admin@example.com)',
    ],
]);
```

Или через переменные окружения:

```php
<?php

use Andy87\ClientsHh\ApiClientHh;
use Andy87\ClientsHh\HhConfig;

$client = new ApiClientHh(HhConfig::fromEnv());
```

По умолчанию `HhConfig::fromEnv()` читает:

- `HH_ACCESS_TOKEN`
- `HH_CLIENT_ID`
- `HH_CLIENT_SECRET`

`clientId` и `clientSecret` хранятся в конфигурации для прикладных интеграций, но дефолтный клиент не выполняет login/password flow и не запрашивает token автоматически.

## Runtime Options

`ApiClientHh` поддерживает общие runtime-options из `andy87/php-client-sdk`: дефолтные заголовки, обработчики событий, пользовательский transport, retry policy, response decoder и authorization resolver.

```php
<?php

use Andy87\ClientsHh\ApiClientHh;
use Andy87\PhpClientSdk\Event\BeforeRequestEvent;

$client = new ApiClientHh([
    'accessToken' => 'your-oauth-access-token',
], [
    ApiClientHh::HEADERS => [
        'HH-User-Agent' => 'my-app/1.0 (admin@example.com)',
    ],
    ApiClientHh::EVENTS => [
        ApiClientHh::EVENT_BEFORE_REQUEST => static function (BeforeRequestEvent $event): void {
            $event->request->headers['X-Trace-Id'] = bin2hex(random_bytes(8));
        },
    ],
]);
```

## Публичный API

- `Andy87\ClientsHh\ApiClientHh` - главный клиент с ленивым доступом к provider-разделам.
- `Andy87\ClientsHh\HhConfig` - конфигурация подключения.
- `Andy87\ClientsHh\BaseHhProvider` - базовый provider для сгенерированных разделов API.
- `Andy87\ClientsHh\Generated\ProviderKey` - enum со стабильными ASCII-ключами provider-разделов.
- `Andy87\ClientsHh\Generated\Provider` - сгенерированные provider-разделы.
- `Andy87\ClientsHh\Generated\Prompt` - сгенерированные DTO запросов.
- `Andy87\ClientsHh\Generated\Response` - сгенерированные DTO ответов.
- `Andy87\ClientsHh\Generated\Schema` - сгенерированные schema DTO.

Generated Prompt DTO заполняются через публичные свойства. Сначала создайте prompt object, затем присвойте значения его полям.

## Ошибки

Ошибки транспорта, авторизации, декодирования, валидации и гидрации response DTO выбрасываются исключениями `andy87/php-client-sdk`. API error payload доступен через metadata сгенерированного response DTO и SDK error object.
