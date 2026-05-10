<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesArgumentItem.
 */
class VacanciesArgumentItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['argument' => 'argument', 'cluster_group' => 'cluster_group', 'disable_url' => 'disable_url', 'hex_color' => 'hex_color', 'metro_type' => 'metro_type', 'name' => 'name', 'value' => 'value', 'value_description' => 'value_description'];

    protected const REQUIRED_FIELDS = ['argument', 'value', 'disable_url'];

    protected const NULLABLE_FIELDS = ['cluster_group', 'hex_color', 'metro_type', 'name', 'value_description'];

    protected const CASTS = [];

    /** @var string Параметр поиска вакансии */
    public string $argument;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Группа кластеров, которая связана с данным параметром */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $cluster_group = null;

    /** @var string URL поиска вакансий, который получится, если перестать учитывать в поиске данный параметр */
    public string $disable_url;

    /** @var string|null Цвет линии в HEX-формате `RRGGBB` (от `000000` до `FFFFFF`). Возвращается только для аргумента `metro` */
    public ?string $hex_color = null;

    /** @var string|null Станция или линия метро (`station`/`line`). Возвращается только для аргумента `metro` */
    public ?string $metro_type = null;

    /** @var string|null Название значения */
    public ?string $name = null;

    /** @var string Значение параметра */
    public string $value;

    /** @var string|null Описание параметра */
    public ?string $value_description = null;
}
