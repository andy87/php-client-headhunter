<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesPreferredNegotiationsOrder.
 */
class VacanciesPreferredNegotiationsOrder extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['order_type' => 'order_type'];

    protected const REQUIRED_FIELDS = ['order_type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['order_type' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName Тип сортировки */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $order_type;
}
