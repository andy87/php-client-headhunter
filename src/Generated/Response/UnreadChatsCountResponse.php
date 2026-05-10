<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /common/chats/counters/unread.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/unread-chats-count
 */
class UnreadChatsCountResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['unread_chats_count' => 'unread_chats_count'];

    protected const REQUIRED_FIELDS = ['unread_chats_count'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonUnreadChatsCountResponse::class;

    /** @var string Количестве непрочитанных чатов */
    public string $unread_chats_count;
}
