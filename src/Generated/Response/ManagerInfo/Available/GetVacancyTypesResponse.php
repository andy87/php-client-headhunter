<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ManagerInfo\Available;

use Andy87\ClientsHh\Generated\Response\GetAvailableVacancyTypesResponse as BaseGetAvailableVacancyTypesResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/vacancies/available_types.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-available-vacancy-types
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesAvailableVacancyTypeItem> $items Массив вариантов публикации вакансии
 */
class GetVacancyTypesResponse extends BaseGetAvailableVacancyTypesResponse
{
}
