<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MetroLineStation.
 */
class MetroLineStation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'lat' => 'lat', 'line' => 'line', 'lng' => 'lng', 'name' => 'name', 'order' => 'order'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'lat', 'lng', 'order', 'line'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['line' => \Andy87\ClientsHh\Generated\Schema\Common\MetroMetroLine::class];

    /** @var string Идентификатор станции */
    public string $id;

    /** @var float Широта расположения станции */
    public float $lat;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\MetroMetroLine Линия метро */
    public \Andy87\ClientsHh\Generated\Schema\Common\MetroMetroLine $line;

    /** @var float Долгота расположения станции */
    public float $lng;

    /** @var string Название станции */
    public string $name;

    /** @var int Порядковый номер станции на линии, начиная с 0 */
    public int $order;
}
