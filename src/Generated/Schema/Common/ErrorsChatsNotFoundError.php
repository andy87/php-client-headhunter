<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsChatsNotFoundError.
 */
class ErrorsChatsNotFoundError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reason' => 'reason', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Описание причины возникновения ошибки */
    public ?string $reason = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;
}
