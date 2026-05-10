<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Чаты\Chat;

use Andy87\ClientsHh\Generated\Prompt\ChatMessagePutPrompt as BaseChatMessagePutPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /common/chats/{chat_id}/messages/{message_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/chat-message-put
 *
 * @property string $chat_id Идентификатор чата
 * @property string $message_id Идентификатор сообщения
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property string $text Текст изменённого сообщения
 */
class MessagePutPrompt extends BaseChatMessagePutPrompt
{
}
