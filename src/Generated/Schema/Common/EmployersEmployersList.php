<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersEmployersList.
 */
class EmployersEmployersList extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['found' => 'found', 'items' => 'items', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployerItem::class]];

    /** @var int Найдено результатов */
    public int $found;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployerItem> Найденные работодатели */
    public array $items;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;
}
