<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadArgumentError.
 */
class ErrorsCommonBadArgumentError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reason' => 'reason', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Причина ошибки. Возможные значения:
  * `too_long_value` — слишком длинное значение
  * `too_many_arguments` — слишком много аргументов
  * `invalid` — значение введено некорректно
 */
    public ?string $reason = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string|null Название поля с ошибкой
 */
    public ?string $value = null;
}
