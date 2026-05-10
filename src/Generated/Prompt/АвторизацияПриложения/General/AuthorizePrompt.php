<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\АвторизацияПриложения\General;

use Andy87\ClientsHh\Generated\Prompt\AuthorizePrompt as BaseAuthorizePrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /token.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/authorize
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property \Andy87\ClientsHh\Generated\Schema\Common\AuthCode $body В зависимости от способа получения токена `grant_type` необходимо передавать различные наборы параметров <a name="required_parameters"></a>
 */
class AuthorizePrompt extends BaseAuthorizePrompt
{
}
