<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesIdNameDesc.
 */
class IncludesIdNameDesc extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'description' => 'description', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'description'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор */
    public string $id;

    /** @var string Описание */
    public string $description;

    /** @var string Название */
    public string $name;
}
