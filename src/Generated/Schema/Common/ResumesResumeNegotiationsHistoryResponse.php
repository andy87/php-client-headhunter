<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumesResumeNegotiationsHistoryResponse.
 */
class ResumesResumeNegotiationsHistoryResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['vacancies' => 'vacancies'];

    protected const REQUIRED_FIELDS = ['vacancies'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['vacancies' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancy::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancy> Массив вакансий */
    public array $vacancies;
}
