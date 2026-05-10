<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyRequiredVacancyPropertyItem.
 */
class VacancyRequiredVacancyPropertyItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['parameters' => 'parameters', 'property_type' => 'property_type'];

    protected const REQUIRED_FIELDS = ['property_type'];

    protected const NULLABLE_FIELDS = ['parameters'];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Параметры свойства */
    public ?array $parameters = null;

    /** @var string Имя свойства */
    public string $property_type;
}
