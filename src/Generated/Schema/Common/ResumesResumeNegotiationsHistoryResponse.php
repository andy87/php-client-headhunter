<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumesResumeNegotiationsHistoryResponse.
 */
class ResumesResumeNegotiationsHistoryResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['vacancies' => 'vacancies'];

    protected const REQUIRED_FIELDS = ['vacancies'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['vacancies' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancy::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancy> Массив вакансий */
    public array $vacancies;
}
