<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftVacancyDraftCreateProperties.
 */
class VacancyDraftVacancyDraftCreateProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['closed_for_applicants' => 'closed_for_applicants', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['closed_for_applicants' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null Schema field closed_for_applicants */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftSetterVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftSetterVacancyProperties $vacancy_properties = null;
}
