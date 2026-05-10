<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\УслугиРаботодателя\Vacancy;

use Andy87\ClientsHh\Generated\Response\GetVacancyAvailableServicesListResponse as BaseGetVacancyAvailableServicesListResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/services/available_publications.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-available-services-list
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\ServicesVacanciesAvailablePublications> $publication_variants Список доступных типов публикаций
 */
class GetAvailableServicesListResponse extends BaseGetVacancyAvailableServicesListResponse
{
}
