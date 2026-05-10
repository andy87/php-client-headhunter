<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesArchivedVacancyList.
 */
class VacanciesArchivedVacancyList extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyArchived::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyArchived> Массив вакансий в архиве */
    public array $items;
}
