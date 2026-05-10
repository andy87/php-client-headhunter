<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesSalaryStatisticsSpecializations.
 */
class DictionariesSalaryStatisticsSpecializations extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['specializations' => 'specializations'];

    protected const REQUIRED_FIELDS = ['specializations'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['specializations' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdNameDesc::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdNameDesc> Schema field specializations */
    public array $specializations;
}
