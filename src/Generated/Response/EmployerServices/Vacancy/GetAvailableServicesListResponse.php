<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerServices\Vacancy;

use and_y87\ClientsHh\Generated\Response\GetVacancyAvailableServicesListResponse as BaseGetVacancyAvailableServicesListResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/services/available_publications.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-available-services-list
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\ServicesVacanciesAvailablePublications> $publication_variants Список доступных типов публикаций
 */
class GetAvailableServicesListResponse extends BaseGetVacancyAvailableServicesListResponse
{
}
