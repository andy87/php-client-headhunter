<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsSalaryRangeFields.
 */
class VacanciesVacancyConditionFieldsSalaryRangeFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['currency' => 'currency', 'frequency' => 'frequency', 'from' => 'from', 'gross' => 'gross', 'mode' => 'mode', 'to' => 'to'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['currency', 'frequency', 'from', 'gross', 'mode', 'to'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field currency */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $currency = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field frequency */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $frequency = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field from */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $from = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field gross */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $gross = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field mode */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $mode = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field to */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $to = null;
}
