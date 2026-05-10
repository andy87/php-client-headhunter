<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadJsonDataError.
 */
class ErrorsCommonBadJsonDataError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'pointer' => 'pointer', 'reason' => 'reason', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = ['description'];

    protected const CASTS = [];

    /** @var string|null Описание ошибки */
    public ?string $description = null;

    /** @var string|null Путь до параметра, в котором возникла ошибка.

Для указания параметра используется формат JsonPointer [RFC 6901](https://datatracker.ietf.org/doc/html/rfc6901)
 */
    public ?string $pointer = null;

    /** @var string|null Причина ошибки. Возможные значения:
  * `required` — отсутствует обязательное поле;
  * `invalid` — значение введено некорректно;
  * `size_less_than_min` — пустой массив;
  * `unexpected` — поле не ожидается;
  * `greater_than_max` — значение больше максимума
  * `deprecated` — значение устарело и больше не используется
 */
    public ?string $reason = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string|null Название поля с ошибкой */
    public ?string $value = null;
}
