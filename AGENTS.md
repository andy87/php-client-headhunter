# AGENTS.md instructions for php-client-hh

<INSTRUCTIONS>
Отвечай на Русском.
Нормализуй переводы строк к LF.

## Документация

- README и `docs/ru/README.md` держи пользовательскими: установка, быстрый старт, конфигурация, публичный API, ошибки.
- Не добавляй в README внутренние детали генерации OpenAPI и команды генератора.

## Генерация OpenAPI

- Сгенерированные API-классы создаются проектным генератором через Composer script:

```bash
composer generate
```

- Composer script запускает:

```bash
node tools/generate-hh-openapi.mjs
```

- Генератор загружает HeadHunter OpenAPI specification и записывает providers, prompts, responses, schemas и provider registry в `src/Generated`.

## Рабочие команды

- Для поиска namespace с backslash используй fixed-string поиск, чтобы не ломать regex-экранирование:

```bash
rg -n -F 'and_y87\PhpClientSdk\' src tests tools README.md docs AGENTS.md composer.json
```

- Если `composer require` обновил `composer.json`, но загрузка dist-пакета оборвалась по timeout, повтори установку из lock:

```bash
composer install --prefer-dist
```

- В root/superuser-среде Composer может прерывать script-команды без явного разрешения. Для проверок используй:

```bash
COMPOSER_ALLOW_SUPERUSER=1 composer test
COMPOSER_ALLOW_SUPERUSER=1 composer analyse
```
</INSTRUCTIONS>
