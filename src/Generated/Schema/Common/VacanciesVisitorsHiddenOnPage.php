<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVisitorsHiddenOnPage.
 */
class VacanciesVisitorsHiddenOnPage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['hidden_on_page' => 'hidden_on_page'];

    protected const REQUIRED_FIELDS = ['hidden_on_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Количество удаленных или скрытых соискателями резюме на странице */
    public float $hidden_on_page;
}
