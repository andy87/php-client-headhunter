<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsRequiredCountWithTitle.
 */
class VacanciesVacancyConditionFieldsRequiredCountWithTitle extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['max_count' => 'max_count', 'min_count' => 'min_count', 'required' => 'required'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['required'];

    protected const CASTS = [];

    /** @var float|null Максимальное количество объектов для полей, в которых передается список. Если `null` — количество неограниченно */
    public ?float $max_count = null;

    /** @var float|null Минимальное количество объектов для полей, в которых передается список */
    public ?float $min_count = null;

    /** @var bool|null Является ли поле необходимым? */
    public ?bool $required = null;
}
