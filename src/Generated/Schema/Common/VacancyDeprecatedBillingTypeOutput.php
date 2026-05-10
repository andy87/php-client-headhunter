<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDeprecatedBillingTypeOutput.
 */
class VacancyDeprecatedBillingTypeOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Биллинговый тип [из справочника vacancy_billing_type](#tag/Obshie-spravochniki/operation/get-dictionaries), если передать vacancy_properties, то значение данного поля будет проигнорировано */
    public string $id;

    /** @var string|null Название биллингового типа вакансии */
    public ?string $name = null;
}
