<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesSalaryStatisticsAreaItem.
 */
class DictionariesSalaryStatisticsAreaItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['areas' => 'areas', 'id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['areas' => [\and_y87\ClientsHh\Generated\Schema\Common\DictionariesSalaryStatisticsAreaItem::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\DictionariesSalaryStatisticsAreaItem>|null Дочерние регионы */
    public ?array $areas = null;

    /** @var string Идентификатор региона */
    public string $id;

    /** @var string Название региона */
    public string $name;
}
