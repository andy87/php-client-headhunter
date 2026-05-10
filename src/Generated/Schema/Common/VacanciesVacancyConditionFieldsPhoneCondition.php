<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsPhoneCondition.
 */
class VacanciesVacancyConditionFieldsPhoneCondition extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['max_count' => 'max_count', 'min_count' => 'min_count', 'required' => 'required', 'fields' => 'fields'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['required'];

    protected const CASTS = ['fields' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditionFieldsPhoneFields::class];

    /** @var float|null Максимальное количество объектов для полей, в которых передается список. Если `null` — количество неограниченно */
    public ?float $max_count = null;

    /** @var float|null Минимальное количество объектов для полей, в которых передается список */
    public ?float $min_count = null;

    /** @var bool|null Является ли поле необходимым? */
    public ?bool $required = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditionFieldsPhoneFields|null Schema field fields */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditionFieldsPhoneFields $fields = null;
}
