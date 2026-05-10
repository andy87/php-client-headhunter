<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsRequiredLengthWithTitle.
 */
class VacanciesVacancyConditionFieldsRequiredLengthWithTitle extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['max_length' => 'max_length', 'min_length' => 'min_length', 'required' => 'required'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['max_length', 'min_length', 'required'];

    protected const CASTS = [];

    /** @var float|null Максимальная длина для текстовых полей */
    public ?float $max_length = null;

    /** @var float|null Минимальная длина для текстовых полей */
    public ?float $min_length = null;

    /** @var bool|null Является ли поле необходимым? */
    public ?bool $required = null;
}
