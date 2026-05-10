<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsRequiredValueWithTitle.
 */
class VacanciesVacancyConditionFieldsRequiredValueWithTitle extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['max_value' => 'max_value', 'min_value' => 'min_value', 'required' => 'required'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['max_value', 'min_value', 'required'];

    protected const CASTS = [];

    /** @var float|null Максимальное значение */
    public ?float $max_value = null;

    /** @var float|null Минимальное значение */
    public ?float $min_value = null;

    /** @var bool|null Является ли поле необходимым? */
    public ?bool $required = null;
}
