<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesSortingType.
 */
class IncludesSortingType extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['ordered_by' => 'ordered_by'];

    protected const REQUIRED_FIELDS = ['ordered_by'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['ordered_by' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName Применяемый тип сортировки */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $ordered_by;
}
