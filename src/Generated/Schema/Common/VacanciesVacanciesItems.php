<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacanciesItems.
 */
class VacanciesVacanciesItems extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacanciesItem::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacanciesItem> Список вакансий */
    public array $items;
}
