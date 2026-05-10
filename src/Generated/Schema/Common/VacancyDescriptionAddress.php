<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDescriptionAddress.
 */
class VacancyDescriptionAddress extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['description'];

    protected const CASTS = [];

    /** @var string|null Описание */
    public ?string $description = null;
}
