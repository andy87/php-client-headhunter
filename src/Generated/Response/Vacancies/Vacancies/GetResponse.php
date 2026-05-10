<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Vacancies\Vacancies;

use Andy87\ClientsHh\Generated\Response\GetVacanciesResponse as BaseGetVacanciesResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancies
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\Vacancy> $items Vacancy collection.
 * @property int $found Found vacancies count.
 * @property int|null $page Current page.
 * @property int|null $pages Total pages.
 * @property int|null $per_page Items per page.
 */
class GetResponse extends BaseGetVacanciesResponse
{
}
