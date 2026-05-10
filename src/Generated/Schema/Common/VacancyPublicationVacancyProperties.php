<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyPublicationVacancyProperties.
 */
class VacancyPublicationVacancyProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['appearance' => 'appearance', 'properties' => 'properties'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['appearance' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance|null Переводы */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance $appearance = null;

    /** @var array<int, array<string, mixed>>|null Список свойств вакансии */
    public ?array $properties = null;
}
