<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesSortingType.
 */
class IncludesSortingType extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['ordered_by' => 'ordered_by'];

    protected const REQUIRED_FIELDS = ['ordered_by'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['ordered_by' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName Применяемый тип сортировки */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $ordered_by;
}
