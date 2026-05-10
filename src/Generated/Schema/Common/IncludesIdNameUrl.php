<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesIdNameUrl.
 */
class IncludesIdNameUrl extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор */
    public string $id;

    /** @var string Название */
    public string $name;

    /** @var string URL получения информации о поле */
    public string $url;
}
