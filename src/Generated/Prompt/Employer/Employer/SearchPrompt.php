<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Employer\Employer;

use Andy87\ClientsHh\Generated\Prompt\SearchEmployerPrompt as BaseSearchEmployerPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/search-employer
 *
 * @property string|null $text Текст для поиска. Переданное значение ищется в названии и описании работодателя
 * @property string|null $area Идентификатор региона работодателя, множественный параметр. Идентификаторы регионов можно узнать в [справочнике регионов](#tag/Obshie-spravochniki/operation/get-areas)
 * @property string|null $type Тип работодателя, множественный параметр. Разрешенные значения перечислены в [справочнике](#tag/Obshie-spravochniki/operation/get-dictionaries) в поле `employer_type`
 * @property bool|null $only_with_vacancies Возвращать только работодателей у которых есть в данный момент открытые вакансии (`true`) или же всех (`false`). По умолчанию — `false`
 * @property string|null $sort_by Сортировка по имени (`by_name`) или по количеству открытых вакансий (`by_vacancies_open`). По умолчанию — `by_name`
 * @property float|null $page Номер страницы с работодателями (считается от `0`, по умолчанию — `0`)
 * @property float|null $per_page Количество элементов на страницу (по умолчанию — 20, максимум — 100 )
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class SearchPrompt extends BaseSearchEmployerPrompt
{
}
