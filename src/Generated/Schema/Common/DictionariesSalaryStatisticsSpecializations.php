<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesSalaryStatisticsSpecializations.
 */
class DictionariesSalaryStatisticsSpecializations extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['specializations' => 'specializations'];

    protected const REQUIRED_FIELDS = ['specializations'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['specializations' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameDesc::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameDesc> Schema field specializations */
    public array $specializations;
}
