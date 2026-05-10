<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesItemsOfClusterItem.
 */
class VacanciesItemsOfClusterItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['count' => 'count', 'metro_line' => 'metro_line', 'metro_station' => 'metro_station', 'name' => 'name', 'type' => 'type', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['name', 'url', 'count'];

    protected const NULLABLE_FIELDS = ['metro_line', 'metro_station', 'type'];

    protected const CASTS = [];

    /** @var float Количество вакансий в данном элементе кластера */
    public float $count;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field metro_line */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $metro_line = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field metro_station */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $metro_station = null;

    /** @var string Название элемента кластера */
    public string $name;

    /** @var string|null Тип значения, связанного с группой */
    public ?string $type = null;

    /** @var string Ссылка на поисковую выдачу по данному элементу кластера */
    public string $url;
}
