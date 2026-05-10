<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsDraftError.
 */
class ErrorsDraftError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string Значение ошибки */
    public string $value;
}
