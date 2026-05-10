<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsCompanies.
 */
class SuggestsCompanies extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\SuggestsCompanyItem::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsCompanyItem> Информация о найденных организациях */
    public array $items;
}
