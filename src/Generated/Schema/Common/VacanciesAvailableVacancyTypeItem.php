<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesAvailableVacancyTypeItem.
 */
class VacanciesAvailableVacancyTypeItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['available_publications_count' => 'available_publications_count', 'description' => 'description', 'name' => 'name', 'publications' => 'publications', 'vacancy_billing_type' => 'vacancy_billing_type', 'vacancy_types' => 'vacancy_types'];

    protected const REQUIRED_FIELDS = ['name', 'description', 'available_publications_count', 'vacancy_billing_type', 'vacancy_types', 'publications'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['publications' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyPublications::class, 'vacancy_billing_type' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyBillingType::class, 'vacancy_types' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyTypes::class];

    /** @var float Общее количество публикаций, доступных данному менеджеру */
    public float $available_publications_count;

    /** @var string Описание типа публикации */
    public string $description;

    /** @var string Название типа публикации */
    public string $name;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyPublications Schema field publications */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyPublications $publications;

    /** @var array<string, mixed> Schema field vacancy_billing_type */
    public array $vacancy_billing_type;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyTypes Schema field vacancy_types */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyTypes $vacancy_types;
}
