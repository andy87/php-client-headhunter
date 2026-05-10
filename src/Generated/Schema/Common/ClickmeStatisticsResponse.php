<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ClickmeStatisticsResponse.
 */
class ClickmeStatisticsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\ClickmeStatisticsItem::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ClickmeStatisticsItem> Schema field items */
    public array $items;
}
