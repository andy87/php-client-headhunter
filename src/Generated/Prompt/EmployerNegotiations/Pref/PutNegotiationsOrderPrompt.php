<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerNegotiations\Pref;

use and_y87\ClientsHh\Generated\Prompt\PutPrefNegotiationsOrderPrompt as BasePutPrefNegotiationsOrderPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /vacancies/{id}/preferred_negotiations_order.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/put-pref-negotiations-order
 *
 * @property string $id Идентификатор вакансии
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property string $order Идентификатор типа сортировки. Возможные значения представлены в поле `order_types` [коллекции откликов и приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations). Не все типы сортировки из списка доступны для изменения
 */
class PutNegotiationsOrderPrompt extends BasePutPrefNegotiationsOrderPrompt
{
}
