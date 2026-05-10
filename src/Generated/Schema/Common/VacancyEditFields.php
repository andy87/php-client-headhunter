<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyEditFields.
 */
class VacancyEditFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['description', 'name'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription|null Schema field description */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription $description = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyName|null Schema field name */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyName $name = null;
}
