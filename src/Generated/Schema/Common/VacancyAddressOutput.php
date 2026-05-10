<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyAddressOutput.
 */
class VacancyAddressOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['building' => 'building', 'city' => 'city', 'lat' => 'lat', 'lng' => 'lng', 'street' => 'street', 'description' => 'description', 'metro_stations' => 'metro_stations'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['building', 'city', 'lat', 'lng', 'street', 'description'];

    protected const CASTS = ['metro_stations' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesMetroStation::class]];

    /** @var string|null Дом */
    public ?string $building = null;

    /** @var string|null Город */
    public ?string $city = null;

    /** @var float|null Широта */
    public ?float $lat = null;

    /** @var float|null Долгота */
    public ?float $lng = null;

    /** @var string|null Улица */
    public ?string $street = null;

    /** @var string|null Описание */
    public ?string $description = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesMetroStation>|null Schema field metro_stations */
    public ?array $metro_stations = null;
}
