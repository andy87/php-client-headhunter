<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsSalaryRangeCondition.
 */
class VacanciesVacancyConditionFieldsSalaryRangeCondition extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['required' => 'required', 'fields' => 'fields'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['required'];

    protected const CASTS = ['fields' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditionFieldsSalaryRangeFields::class];

    /** @var bool|null Является ли поле необходимым? */
    public ?bool $required = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditionFieldsSalaryRangeFields|null Schema field fields */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditionFieldsSalaryRangeFields $fields = null;
}
