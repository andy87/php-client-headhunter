<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonConflictError.
 */
class ErrorsCommonConflictError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reason' => 'reason', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'reason'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Причина ошибки */
    public string $reason;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;
}
