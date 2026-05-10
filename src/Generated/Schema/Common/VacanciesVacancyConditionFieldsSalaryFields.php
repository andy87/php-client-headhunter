<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsSalaryFields.
 */
class VacanciesVacancyConditionFieldsSalaryFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['currency' => 'currency', 'from' => 'from', 'gross' => 'gross', 'to' => 'to'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['currency', 'from', 'gross', 'to'];

    protected const CASTS = [];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field currency */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $currency = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field from */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $from = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field gross */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $gross = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field to */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $to = null;
}
