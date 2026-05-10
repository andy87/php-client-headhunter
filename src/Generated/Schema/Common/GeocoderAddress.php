<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter GeocoderAddress.
 */
class GeocoderAddress extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['building' => 'building', 'city' => 'city', 'lat' => 'lat', 'lng' => 'lng', 'street' => 'street'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['building', 'city', 'lat', 'lng', 'street'];

    protected const CASTS = [];

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
}
