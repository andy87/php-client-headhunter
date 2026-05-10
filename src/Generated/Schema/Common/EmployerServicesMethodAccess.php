<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerServicesMethodAccess.
 */
class EmployerServicesMethodAccess extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployerServicesMethodAccessItem::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerServicesMethodAccessItem> Schema field items */
    public array $items;
}
