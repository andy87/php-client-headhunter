<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Chats\Chat;

use Andy87\ClientsHh\Generated\Prompt\GetChatMessagesPrompt as BaseGetChatMessagesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /common/chats/{chat_id}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-chat-messages
 *
 * @property string $chat_id Идентификатор чата
 * @property string|null $start_message_id Идентификатор сообщения, с которого запрашивается список сообщений: * для `order = next` по умолчанию `start_message_id` — первое сообщение в чате; * для `order = prev` по умолчанию `start_message_id` — последнее сообщение в чате
 * @property int|null $limit Максимальное количество выводимых сообщений
 * @property string|null $order Порядок сообщений. Задает в каком порядке, начиная с сообщения с идентификатором `start_message_id`, будет произведена выборка сообщений. Например: * при `order=next, start_message_id=100, limit=25` в ответе будут сообщения с идентификаторами `100`...`125` * при `order=prev, start_message_id=100, limit=25` в ответе будут сообщения с идентификаторами `75`...`100`
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetMessagesPrompt extends BaseGetChatMessagesPrompt
{
}
