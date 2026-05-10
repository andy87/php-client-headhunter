<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesAvailableVacancyTypeItem.
 */
class VacanciesAvailableVacancyTypeItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['available_publications_count' => 'available_publications_count', 'description' => 'description', 'name' => 'name', 'publications' => 'publications', 'vacancy_billing_type' => 'vacancy_billing_type', 'vacancy_types' => 'vacancy_types'];

    protected const REQUIRED_FIELDS = ['name', 'description', 'available_publications_count', 'vacancy_billing_type', 'vacancy_types', 'publications'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['publications' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyPublications::class, 'vacancy_billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyBillingType::class, 'vacancy_types' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyTypes::class];

    /** @var float Общее количество публикаций, доступных данному менеджеру */
    public float $available_publications_count;

    /** @var string Описание типа публикации */
    public string $description;

    /** @var string Название типа публикации */
    public string $name;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyPublications Schema field publications */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyPublications $publications;

    /** @var array<string, mixed> Schema field vacancy_billing_type */
    public array $vacancy_billing_type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyTypes Schema field vacancy_types */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyTypes $vacancy_types;
}
