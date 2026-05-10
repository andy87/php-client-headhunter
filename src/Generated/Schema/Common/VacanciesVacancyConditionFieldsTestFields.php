<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsTestFields.
 */
class VacanciesVacancyConditionFieldsTestFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['required' => 'required'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['required'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field required */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $required = null;
}
