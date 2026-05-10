<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyAddressRawOutput.
 */
class VacancyAddressRawOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['building' => 'building', 'city' => 'city', 'description' => 'description', 'id' => 'id', 'lat' => 'lat', 'lng' => 'lng', 'metro' => 'metro', 'metro_stations' => 'metro_stations', 'rawData' => 'raw', 'street' => 'street'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['building', 'city', 'description', 'id', 'lat', 'lng', 'metro', 'rawData', 'street'];

    protected const CASTS = ['metro_stations' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesMetroStation::class]];

    /** @var string|null Дом */
    public ?string $building = null;

    /** @var string|null Город */
    public ?string $city = null;

    /** @var string|null Описание */
    public ?string $description = null;

    /** @var string|null Адрес из [списка доступных адресов работодателя](https://api.hh.ru/openapi/redoc#tag/Adresa-rabotodatelya/operation/get-employer-addresses) */
    public ?string $id = null;

    /** @var float|null Широта */
    public ?float $lat = null;

    /** @var float|null Долгота */
    public ?float $lng = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field metro */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $metro = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesMetroStation>|null Schema field metro_stations */
    public ?array $metro_stations = null;

    /** @var string|null Полный адрес */
    public ?string $rawData = null;

    /** @var string|null Улица */
    public ?string $street = null;
}
