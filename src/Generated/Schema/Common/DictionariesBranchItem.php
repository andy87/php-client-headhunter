<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesBranchItem.
 */
class DictionariesBranchItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'industries' => 'industries', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'industries'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['industries' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var string Идентификатор отрасли */
    public string $id;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName> Сферы деятельности */
    public array $industries;

    /** @var string Название отрасли */
    public string $name;
}
