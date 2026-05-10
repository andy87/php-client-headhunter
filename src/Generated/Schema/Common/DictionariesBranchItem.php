<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesBranchItem.
 */
class DictionariesBranchItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'industries' => 'industries', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'industries'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['industries' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var string Идентификатор отрасли */
    public string $id;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Сферы деятельности */
    public array $industries;

    /** @var string Название отрасли */
    public string $name;
}
