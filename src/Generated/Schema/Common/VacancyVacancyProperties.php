<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyVacancyProperties.
 */
class VacancyVacancyProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['appearance' => 'appearance', 'properties' => 'properties'];

    protected const REQUIRED_FIELDS = ['properties'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['appearance' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance|null Переводы */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance $appearance = null;

    /** @var array<int, array<string, mixed>> Свойства вакансии.
Доступны только менеджерам работодателя-владельца вакансии
 */
    public array $properties;
}
