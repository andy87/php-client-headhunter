<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Чаты\Unread;

use Andy87\ClientsHh\Generated\Response\UnreadChatsCountResponse as BaseUnreadChatsCountResponse;

/**
 * Ответ HeadHunter API [GET] /common/chats/counters/unread.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/unread-chats-count
 *
 * @property string $unread_chats_count Количестве непрочитанных чатов
 */
class ChatsCountResponse extends BaseUnreadChatsCountResponse
{
}
