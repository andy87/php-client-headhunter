<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsRegexp.
 */
class VacanciesVacancyConditionFieldsRegexp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['regexp' => 'regexp'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['regexp'];

    protected const CASTS = [];

    /** @var string|null Регулярное выражение, которому должно отвечать значение поля */
    public ?string $regexp = null;
}
