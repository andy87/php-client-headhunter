<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\VacancyManagement\Vacancy;

use and_y87\ClientsHh\Generated\Prompt\GetVacancyStatsPrompt as BaseGetVacancyStatsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /vacancies/{vacancy_id}/stats.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-stats
 *
 * @property string $vacancy_id Идентификатор вакансии
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetStatsPrompt extends BaseGetVacancyStatsPrompt
{
}
