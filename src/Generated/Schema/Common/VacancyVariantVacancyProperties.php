<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyVariantVacancyProperties.
 */
class VacancyVariantVacancyProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['required' => 'required'];

    protected const REQUIRED_FIELDS = ['required'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['required' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyRequiredVacancyProperties::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyRequiredVacancyProperties Schema field required */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyRequiredVacancyProperties $required;
}
