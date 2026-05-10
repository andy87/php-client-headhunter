<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesUpgradeFieldsBillingTypeFull.
 */
class VacanciesUpgradeFieldsBillingTypeFull extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'description' => 'description'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Биллинговый тип [из справочника vacancy_billing_type](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public string $id;

    /** @var string|null Название биллингового типа вакансии */
    public ?string $name = null;

    /** @var string|null Описание типа вакансии */
    public ?string $description = null;
}
