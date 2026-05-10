<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsTestFields.
 */
class VacanciesVacancyConditionFieldsTestFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['required' => 'required'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['required'];

    protected const CASTS = [];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field required */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $required = null;
}
