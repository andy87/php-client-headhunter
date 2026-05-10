<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Chats\Last;

use Andy87\ClientsHh\Generated\Prompt\SetLastViewedMessagePrompt as BaseSetLastViewedMessagePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /common/chats/{chat_id}/message/{message_id}/read.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/set-last-viewed-message
 *
 * @property string $chat_id Идентификатор чата
 * @property string $message_id Идентификатор сообщения
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class SetViewedMessagePrompt extends BaseSetLastViewedMessagePrompt
{
}
