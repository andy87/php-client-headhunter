<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftVacancyDraftCreateProperties.
 */
class VacancyDraftVacancyDraftCreateProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['closed_for_applicants' => 'closed_for_applicants', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['closed_for_applicants' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null Schema field closed_for_applicants */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftSetterVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftSetterVacancyProperties $vacancy_properties = null;
}
