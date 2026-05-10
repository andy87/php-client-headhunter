<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/services/available_publications.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-available-services-list
 */
class GetVacancyAvailableServicesListResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['publication_variants' => 'publication_variants'];

    protected const REQUIRED_FIELDS = ['publication_variants'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['publication_variants' => [\and_y87\ClientsHh\Generated\Schema\Common\ServicesVacanciesAvailablePublications::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\ServicesVacancyAvailablePublication::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ServicesVacanciesAvailablePublications> Список доступных типов публикаций */
    public array $publication_variants;
}
