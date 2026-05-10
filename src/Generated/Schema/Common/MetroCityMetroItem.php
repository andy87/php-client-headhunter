<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MetroCityMetroItem.
 */
class MetroCityMetroItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'lines' => 'lines', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'lines'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['lines' => [\Andy87\ClientsHh\Generated\Schema\Common\MetroMetroLineWithStations::class]];

    /** @var string Идентификатор города */
    public string $id;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\MetroMetroLineWithStations> Список линий метро в городе */
    public array $lines;

    /** @var string Название города */
    public string $name;
}
