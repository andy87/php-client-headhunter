<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesClusters.
 */
class VacanciesClusters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['clusters' => 'clusters'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['clusters'];

    protected const CASTS = ['clusters' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesClusterItem::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesClusterItem>|null Массив [кластеров поиска](#tag/Poisk-vakansij/Klastery-v-poiske-vakansij) */
    public ?array $clusters = null;
}
