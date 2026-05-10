<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\Chats\Common;

use and_y87\ClientsHh\Generated\Prompt\GetCommonChatFilesConditionsPrompt as BaseGetCommonChatFilesConditionsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /common/chats/files/conditions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-common-chat-files-conditions
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetChatFilesConditionsPrompt extends BaseGetCommonChatFilesConditionsPrompt
{
}
