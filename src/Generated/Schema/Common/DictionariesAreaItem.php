<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesAreaItem.
 */
class DictionariesAreaItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'lat' => 'lat', 'lng' => 'lng', 'name' => 'name', 'name_prepositional' => 'name_prepositional', 'parent_id' => 'parent_id', 'utc_offset' => 'utc_offset', 'areas' => 'areas'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'areas'];

    protected const NULLABLE_FIELDS = ['lat', 'lng', 'name_prepositional', 'parent_id', 'utc_offset'];

    protected const CASTS = ['areas' => [\and_y87\ClientsHh\Generated\Schema\Common\DictionariesAreaItem::class]];

    /** @var string Идентификатор региона из [справочника](#tag/Obshie-spravochniki/operation/get-areas)
 */
    public string $id;

    /** @var float|null Широта региона */
    public ?float $lat = null;

    /** @var float|null Долгота региона */
    public ?float $lng = null;

    /** @var string Название региона */
    public string $name;

    /** @var string|null Применимо только для русской локализации.

Название региона в предложном падеже с предлогом `в`, например: `в Москве`. Возвращается, если в запросе передан параметр `additional_case=prepositional`
 */
    public ?string $name_prepositional = null;

    /** @var string|null Идентификатор родительского региона */
    public ?string $parent_id = null;

    /** @var string|null Смещение часового пояса региона относительно UTC, формат `+HH:MM` или `-HH:MM`
 */
    public ?string $utc_offset = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\DictionariesAreaItem> Дочерние регионы */
    public array $areas;
}
