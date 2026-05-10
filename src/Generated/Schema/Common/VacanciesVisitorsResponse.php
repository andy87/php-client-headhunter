<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVisitorsResponse.
 */
class VacanciesVisitorsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items', 'found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page', 'hidden_on_page' => 'hidden_on_page'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page', 'hidden_on_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, mixed> Список сокращенных представлений резюме */
    public array $items;

    /** @var int Найдено результатов */
    public int $found;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;

    /** @var float Количество удаленных или скрытых соискателями резюме на странице */
    public float $hidden_on_page;
}
