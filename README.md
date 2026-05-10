# PHP Client for HeadHunter API

[Russian documentation](docs/ru/README.md)

Typed PHP client for the HeadHunter API. The package provides a main `ApiClientHh` entry point, generated provider sections, request prompt DTOs, response DTOs, and schema classes.

The client is built on top of `andy87/php-client-sdk` and targets PHP 8.1 or newer.

## Requirements

- PHP 8.1 or newer
- Composer
- OAuth access token for protected HeadHunter methods

## Installation

```bash
composer require andy87/php-client-hh
```

## Quick Start

Anonymous methods can be called without OAuth credentials:

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

Protected methods need an OAuth access token:

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

## Configuration

You can pass configuration as an array:

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

Or from environment variables:

```php
<?php

use Andy87\ClientsHh\ApiClientHh;
use Andy87\ClientsHh\HhConfig;

$client = new ApiClientHh(HhConfig::fromEnv());
```

By default, `HhConfig::fromEnv()` reads:

- `HH_ACCESS_TOKEN`
- `HH_CLIENT_ID`
- `HH_CLIENT_SECRET`

`clientId` and `clientSecret` are stored in config for application-level integrations, but the default client does not perform a login/password flow and does not request tokens automatically.

## Runtime Options

`ApiClientHh` supports shared runtime options from `andy87/php-client-sdk`: default request headers, event listeners, custom transport, retry policy, response decoding, and authorization resolver.

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

## Public API

- `Andy87\ClientsHh\ApiClientHh` - main client with lazy provider access.
- `Andy87\ClientsHh\HhConfig` - connection configuration.
- `Andy87\ClientsHh\BaseHhProvider` - base provider for generated API sections.
- `Andy87\ClientsHh\Generated\ProviderKey` - enum with stable ASCII provider keys.
- `Andy87\ClientsHh\Generated\Provider` - generated provider sections.
- `Andy87\ClientsHh\Generated\Prompt` - generated request DTOs.
- `Andy87\ClientsHh\Generated\Response` - generated response DTOs.
- `Andy87\ClientsHh\Generated\Schema` - generated schema DTOs.

Generated prompt DTOs are filled through public properties. Create a prompt object first, then assign request values directly to its fields.

## Errors

Transport, authorization, decoding, validation, and response hydration errors are raised by `andy87/php-client-sdk` exceptions. API error payloads are available through generated response DTO metadata and the SDK error object.
