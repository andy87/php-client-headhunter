<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsMetroStation.
 */
class ResumeObjectsMetroStation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'lat' => 'lat', 'line' => 'line', 'lng' => 'lng', 'name' => 'name', 'order' => 'order'];

    protected const REQUIRED_FIELDS = ['id', 'lat', 'lng', 'order', 'line'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['line' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsMetroLine::class];

    /** @var string Идентификатор станции метро */
    public string $id;

    /** @var float Широта */
    public float $lat;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsMetroLine Линия метро */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsMetroLine $line;

    /** @var float Долгота */
    public float $lng;

    /** @var string|null Название станции метро */
    public ?string $name = null;

    /** @var float Порядковый номер станции в линии метро */
    public float $order;
}
