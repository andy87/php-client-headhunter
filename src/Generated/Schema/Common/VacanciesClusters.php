<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesClusters.
 */
class VacanciesClusters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['clusters' => 'clusters'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['clusters'];

    protected const CASTS = ['clusters' => [\and_y87\ClientsHh\Generated\Schema\Common\VacanciesClusterItem::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesClusterItem>|null Массив [кластеров поиска](#tag/Poisk-vakansij/Klastery-v-poiske-vakansij) */
    public ?array $clusters = null;
}
