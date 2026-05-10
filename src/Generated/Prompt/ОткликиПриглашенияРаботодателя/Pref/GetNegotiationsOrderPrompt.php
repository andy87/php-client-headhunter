<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ОткликиПриглашенияРаботодателя\Pref;

use Andy87\ClientsHh\Generated\Prompt\GetPrefNegotiationsOrderPrompt as BaseGetPrefNegotiationsOrderPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /vacancies/{id}/preferred_negotiations_order.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-pref-negotiations-order
 *
 * @property string $id Идентификатор вакансии
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetNegotiationsOrderPrompt extends BaseGetPrefNegotiationsOrderPrompt
{
}
