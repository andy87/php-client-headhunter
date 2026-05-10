<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsMaxMinValue.
 */
class VacanciesVacancyConditionFieldsMaxMinValue extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['max_value' => 'max_value', 'min_value' => 'min_value'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['max_value', 'min_value'];

    protected const CASTS = [];

    /** @var float|null Максимальное значение */
    public ?float $max_value = null;

    /** @var float|null Минимальное значение */
    public ?float $min_value = null;
}
