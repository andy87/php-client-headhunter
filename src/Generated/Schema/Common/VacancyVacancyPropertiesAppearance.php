<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyVacancyPropertiesAppearance.
 */
class VacancyVacancyPropertiesAppearance extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'title' => 'title'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Описание варианта публикации */
    public ?string $description = null;

    /** @var string|null Название варианта публикации */
    public ?string $title = null;
}
