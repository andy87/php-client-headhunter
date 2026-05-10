<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ИнформацияОСоискателе\Current;

use Andy87\ClientsHh\Generated\Prompt\GetCurrentUserInfoPrompt as BaseGetCurrentUserInfoPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /me.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-current-user-info
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetUserInfoPrompt extends BaseGetCurrentUserInfoPrompt
{
}
