<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsAddressFields.
 */
class VacanciesVacancyConditionFieldsAddressFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['show_metro_only' => 'show_metro_only'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['show_metro_only'];

    protected const CASTS = [];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field show_metro_only */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $show_metro_only = null;
}
