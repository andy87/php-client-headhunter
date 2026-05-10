<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Chats\Chat;

use Andy87\ClientsHh\Generated\Prompt\ChatMessagePostPrompt as BaseChatMessagePostPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /common/chats/{chat_id}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/chat-message-post
 *
 * @property string $chat_id Идентификатор чата
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonMessagePost $body Request body
 */
class MessagePostPrompt extends BaseChatMessagePostPrompt
{
}
