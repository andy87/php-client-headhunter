<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyPublication.
 */
class VacancyPublication extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['areas_url' => 'areas_url', 'count' => 'count', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['name', 'count', 'areas_url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string URL на список регионов, в которых можно опубликовать вакансию данного типа. Список возвращается в древовидной структуре и публикация вакансий возможна только в конечных (листовых) узлах дерева. Они помечены флагом `can_publish=true` */
    public string $areas_url;

    /** @var float Количество публикаций в регионе, доступных работодателю */
    public float $count;

    /** @var string Название региона */
    public string $name;
}
