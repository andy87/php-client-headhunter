<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\Suggestions\Vacancy;

use and_y87\ClientsHh\Generated\Response\GetVacancyPositionsSuggestsResponse as BaseGetVacancyPositionsSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/vacancy_positions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-positions-suggests
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsVacancyPositionItem> $items Информация о найденных должностях вакансий
 */
class GetPositionsSuggestsResponse extends BaseGetVacancyPositionsSuggestsResponse
{
}
