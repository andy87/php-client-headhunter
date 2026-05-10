<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsAddressFields.
 */
class VacanciesVacancyConditionFieldsAddressFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['show_metro_only' => 'show_metro_only'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['show_metro_only'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field show_metro_only */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $show_metro_only = null;
}
