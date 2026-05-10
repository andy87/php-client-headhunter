<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\МенеджерыРаботодателя\Manager;

use Andy87\ClientsHh\Generated\Prompt\GetManagerAccountsPrompt as BaseGetManagerAccountsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /manager_accounts/mine.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-manager-accounts
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetAccountsPrompt extends BaseGetManagerAccountsPrompt
{
}
