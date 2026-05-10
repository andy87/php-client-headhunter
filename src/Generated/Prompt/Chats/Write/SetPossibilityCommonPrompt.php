<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Chats\Write;

use Andy87\ClientsHh\Generated\Prompt\SetWritePossibilityCommonPrompt as BaseSetWritePossibilityCommonPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /common/chats/{chat_id}/write_possibility.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/set-write-possibility-common
 *
 * @property string $chat_id Идентификатор чата
 * @property bool $applicant_write_possibility Флаг разрешенности переписки для соискателя
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class SetPossibilityCommonPrompt extends BaseSetWritePossibilityCommonPrompt
{
}
