<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonUnreadChatsCountResponse.
 */
class ChatsCommonUnreadChatsCountResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['unread_chats_count' => 'unread_chats_count'];

    protected const REQUIRED_FIELDS = ['unread_chats_count'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Количестве непрочитанных чатов */
    public string $unread_chats_count;
}
