<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Чаты\Chat;

use Andy87\ClientsHh\Generated\Response\GetChatMessagesResponse as BaseGetChatMessagesResponse;

/**
 * Ответ HeadHunter API [GET] /common/chats/{chat_id}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-chat-messages
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonBlockReason|null $block_reason Response field block_reason
 * @property string $creation_time Время создания чата
 * @property \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonDisplayInfo $display Response field display
 * @property string $id Идентификатор чата
 * @property bool $muted Отключены ли уведомления
 * @property string $type Тип чата Возможные значения: * `NEGOTIATION` — чат-отклик. Чат, который привязан к отклику/приглашению на вакансию. * `SUPPORT` — чат поддержки. * `BOT` — чат с ботом один на один * `COMMON` — общий тип чата
 * @property int $unread_message_count Кол-во непрочитанных сообщений
 * @property bool $has_more Доступны сообщения для следующей выборки * `true` — последующий запрос с текущим значением параметра `order` вернет не пустой массив `messages` * `false` — последующий запрос с текущим значением параметра `order` вернет пустой массив `messages`
 * @property array<int, array<string, mixed>> $messages Список сообщений
 * @property array<string, mixed> $chat_states Состояние чата
 * @property string|null $vacancy_id Идентификатор вакансии
 */
class GetMessagesResponse extends BaseGetChatMessagesResponse
{
}
