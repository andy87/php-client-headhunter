<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MetroMetroLine.
 */
class MetroMetroLine extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['hex_color' => 'hex_color', 'id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['hex_color', 'id', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Цвет линии в HEX-формате `RRGGBB` (от `000000` до `FFFFFF`) */
    public string $hex_color;

    /** @var string Идентификатор линии */
    public string $id;

    /** @var string Название линии */
    public string $name;
}
