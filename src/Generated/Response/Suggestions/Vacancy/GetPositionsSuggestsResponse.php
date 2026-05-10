<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Suggestions\Vacancy;

use Andy87\ClientsHh\Generated\Response\GetVacancyPositionsSuggestsResponse as BaseGetVacancyPositionsSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/vacancy_positions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-positions-suggests
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsVacancyPositionItem> $items Информация о найденных должностях вакансий
 */
class GetPositionsSuggestsResponse extends BaseGetVacancyPositionsSuggestsResponse
{
}
