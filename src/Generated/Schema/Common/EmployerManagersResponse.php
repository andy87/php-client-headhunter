<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersResponse.
 */
class EmployerManagersResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['found' => 'found', 'items' => 'items', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersEmployerManagerItem::class]];

    /** @var int Schema field found */
    public int $found;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersEmployerManagerItem> Schema field items */
    public array $items;

    /** @var int Schema field page */
    public int $page;

    /** @var int Schema field pages */
    public int $pages;

    /** @var int Schema field per_page */
    public int $per_page;
}
