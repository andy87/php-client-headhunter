<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancySearchResponse.
 */
class VacancySearchResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items', 'found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = ['items', 'found'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\Vacancy::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\Vacancy> Vacancy collection. */
    public array $items;

    /** @var int Found vacancies count. */
    public int $found;

    /** @var int|null Current page. */
    public ?int $page = null;

    /** @var int|null Total pages. */
    public ?int $pages = null;

    /** @var int|null Items per page. */
    public ?int $per_page = null;
}
