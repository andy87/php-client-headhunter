<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesMetroStation.
 */
class IncludesMetroStation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['lat' => 'lat', 'line_id' => 'line_id', 'line_name' => 'line_name', 'lng' => 'lng', 'station_id' => 'station_id', 'station_name' => 'station_name'];

    protected const REQUIRED_FIELDS = ['station_id', 'station_name', 'line_id', 'line_name', 'lat', 'lng'];

    protected const NULLABLE_FIELDS = ['lat', 'lng'];

    protected const CASTS = [];

    /** @var float|null Широта */
    public ?float $lat;

    /** @var string Идентификатор линии метро */
    public string $line_id;

    /** @var string Название линии метро */
    public string $line_name;

    /** @var float|null Долгота */
    public ?float $lng;

    /** @var string Идентификатор станции метро */
    public string $station_id;

    /** @var string Название станции метро */
    public string $station_name;
}
