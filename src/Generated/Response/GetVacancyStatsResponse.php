<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/stats.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-stats
 */
class GetVacancyStatsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyStatsItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyStatsResponse::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyStatsItem> Статистика за последние пять дней существования вакансии */
    public array $items;
}
