<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesDistrictItem.
 */
class DictionariesDistrictItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area_id' => 'area_id', 'id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'area_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор города */
    public string $area_id;

    /** @var string Идентификатор района */
    public string $id;

    /** @var string Название района */
    public string $name;
}
