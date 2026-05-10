<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftVacancyDraftItems.
 */
class VacancyDraftVacancyDraftItems extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['found' => 'found', 'items' => 'items', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftItem::class]];

    /** @var int Schema field found */
    public int $found;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftItem> Список черновиков */
    public array $items;

    /** @var int Schema field page */
    public int $page;

    /** @var int Schema field pages */
    public int $pages;

    /** @var int Schema field per_page */
    public int $per_page;
}
