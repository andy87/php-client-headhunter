<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyEditVacancyProperties.
 */
class VacancyEditVacancyProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['vacancy_properties'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field vacancy_properties */
    public array $vacancy_properties;
}
