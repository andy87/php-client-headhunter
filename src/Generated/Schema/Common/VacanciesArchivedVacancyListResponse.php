<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesArchivedVacancyListResponse.
 */
class VacanciesArchivedVacancyListResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['found', 'page', 'pages', 'per_page', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyArchived::class]];

    /** @var int Найдено результатов */
    public int $found;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyArchived> Массив вакансий в архиве */
    public array $items;
}
