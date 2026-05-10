<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsChatsForbiddenError.
 */
class ErrorsChatsForbiddenError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reason' => 'reason', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'reason'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Описание причины возникновения ошибки */
    public string $reason;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;
}
