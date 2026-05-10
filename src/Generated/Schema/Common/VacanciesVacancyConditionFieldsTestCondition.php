<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsTestCondition.
 */
class VacanciesVacancyConditionFieldsTestCondition extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['required' => 'required', 'fields' => 'fields'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['required'];

    protected const CASTS = ['fields' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditionFieldsTestFields::class];

    /** @var bool|null Является ли поле необходимым? */
    public ?bool $required = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditionFieldsTestFields|null Schema field fields */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditionFieldsTestFields $fields = null;
}
