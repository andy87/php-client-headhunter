<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesNameDescription.
 */
class IncludesNameDescription extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['name', 'description'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Описание */
    public string $description;

    /** @var string Название */
    public string $name;
}
