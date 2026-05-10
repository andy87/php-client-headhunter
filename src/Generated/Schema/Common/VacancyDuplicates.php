<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDuplicates.
 */
class VacancyDuplicates extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['found' => 'found', 'has_duplicates' => 'has_duplicates', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['has_duplicates', 'found', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Общее количество дубликатов вакансии */
    public float $found;

    /** @var bool Существуют ли дубликаты вакансии */
    public bool $has_duplicates;

    /** @var array<int, float> Список идентификаторов дубликатов вакансии */
    public array $items;
}
