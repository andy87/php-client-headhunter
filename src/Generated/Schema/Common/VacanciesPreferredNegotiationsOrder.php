<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesPreferredNegotiationsOrder.
 */
class VacanciesPreferredNegotiationsOrder extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['order_type' => 'order_type'];

    protected const REQUIRED_FIELDS = ['order_type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['order_type' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName Тип сортировки */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $order_type;
}
