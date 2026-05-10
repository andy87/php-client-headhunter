<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonMessagePostText.
 */
class ChatsCommonMessagePostText extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['idempotency_key' => 'idempotency_key', 'is_automated' => 'is_automated', 'text' => 'text'];

    protected const REQUIRED_FIELDS = ['text', 'idempotency_key'];

    protected const NULLABLE_FIELDS = ['is_automated'];

    protected const CASTS = [];

    /** @var string Уникальный ключ для каждого сообщения в формате UUID */
    public string $idempotency_key;

    /** @var bool|null Признак, указывающий, что сообщение создано автоматически (например, с помощью AI) */
    public ?bool $is_automated = null;

    /** @var string Текст сообщения */
    public string $text;
}
