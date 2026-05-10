<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsMaxMinLength.
 */
class VacanciesVacancyConditionFieldsMaxMinLength extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['max_length' => 'max_length', 'min_length' => 'min_length'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['max_length', 'min_length'];

    protected const CASTS = [];

    /** @var float|null Максимальная длина для текстовых полей */
    public ?float $max_length = null;

    /** @var float|null Минимальная длина для текстовых полей */
    public ?float $min_length = null;
}
