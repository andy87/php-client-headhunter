<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsEmployerManagerBadArgumentError.
 */
class ErrorsEmployerManagerBadArgumentError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reason' => 'reason', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Описание ошибки */
    public ?string $reason = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string|null Название поля с ошибкой */
    public ?string $value = null;
}
