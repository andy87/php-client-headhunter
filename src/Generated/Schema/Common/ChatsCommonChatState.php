<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonChatState.
 */
class ChatsCommonChatState extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chat_states' => 'chat_states'];

    protected const REQUIRED_FIELDS = ['chat_states'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Состояние чата */
    public array $chat_states;
}
