<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Chats\Chat;

use Andy87\ClientsHh\Generated\Prompt\ChatMessageDeletePrompt as BaseChatMessageDeletePrompt;

/**
 * Класс данных запроса HeadHunter API [DELETE] /common/chats/{chat_id}/messages/{message_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/chat-message-delete
 *
 * @property string $chat_id Идентификатор чата
 * @property string $message_id Идентификатор сообщения
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class MessageDeletePrompt extends BaseChatMessageDeletePrompt
{
}
