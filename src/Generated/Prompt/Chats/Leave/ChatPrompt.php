<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\Chats\Leave;

use and_y87\ClientsHh\Generated\Prompt\LeaveChatPrompt as BaseLeaveChatPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /common/chats/{chat_id}/leave.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/leave-chat
 *
 * @property string $chat_id Идентификатор чата
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class ChatPrompt extends BaseLeaveChatPrompt
{
}
