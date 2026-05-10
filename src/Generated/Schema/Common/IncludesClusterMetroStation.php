<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesClusterMetroStation.
 */
class IncludesClusterMetroStation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area' => 'area', 'hex_color' => 'hex_color', 'id' => 'id', 'lat' => 'lat', 'lng' => 'lng', 'order' => 'order'];

    protected const REQUIRED_FIELDS = ['id', 'hex_color', 'lat', 'lng', 'order', 'area'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['area' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea::class];

    /** @var array<string, mixed> Schema field area */
    public array $area;

    /** @var string Цвет линии в HEX-формате `RRGGBB` (от `000000` до `FFFFFF`) */
    public string $hex_color;

    /** @var string Идентификатор станции метро */
    public string $id;

    /** @var float Широта */
    public float $lat;

    /** @var float Долгота */
    public float $lng;

    /** @var float Порядковый номер станции в линии метро */
    public float $order;
}
