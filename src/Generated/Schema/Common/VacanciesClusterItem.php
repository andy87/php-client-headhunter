<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesClusterItem.
 */
class VacanciesClusterItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'items' => 'items', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\VacanciesItemsOfClusterItem::class]];

    /** @var string Идентификатор кластера */
    public string $id;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesItemsOfClusterItem> Массив поисковых запросов в данном кластере с указанием дополнительных параметров */
    public array $items;

    /** @var string Название типа кластера */
    public string $name;
}
