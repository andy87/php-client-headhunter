<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesClusterMetroLine.
 */
class IncludesClusterMetroLine extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area' => 'area', 'hex_color' => 'hex_color', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'hex_color', 'area'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['area' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea::class];

    /** @var array<string, mixed> Schema field area */
    public array $area;

    /** @var string Цвет линии в HEX-формате `RRGGBB` (от `000000` до `FFFFFF`) */
    public string $hex_color;

    /** @var string Идентификатор линии */
    public string $id;
}
