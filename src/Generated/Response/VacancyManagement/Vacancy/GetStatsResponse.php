<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancyManagement\Vacancy;

use and_y87\ClientsHh\Generated\Response\GetVacancyStatsResponse as BaseGetVacancyStatsResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/stats.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-stats
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyStatsItem> $items Статистика за последние пять дней существования вакансии
 */
class GetStatsResponse extends BaseGetVacancyStatsResponse
{
}
