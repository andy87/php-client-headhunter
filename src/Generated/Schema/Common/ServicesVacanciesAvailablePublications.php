<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ServicesVacanciesAvailablePublications.
 */
class ServicesVacanciesAvailablePublications extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['appearance' => 'appearance', 'available_publications_count' => 'available_publications_count', 'suitable_packages' => 'suitable_packages', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['appearance', 'available_publications_count', 'suitable_packages', 'vacancy_properties'];

    protected const NULLABLE_FIELDS = ['suitable_packages'];

    protected const CASTS = ['appearance' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance::class, 'suitable_packages' => [\Andy87\ClientsHh\Generated\Schema\Common\ServicesPublicSuitablePackage::class], 'vacancy_properties' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyVariantVacancyProperties::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance Переводы для отображения варианта публикации */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance $appearance;

    /** @var float Количество доступных публикаций */
    public float $available_publications_count;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ServicesPublicSuitablePackage>|null Подходящие для списания пакеты услуг в наличии у работодателя */
    public ?array $suitable_packages;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVariantVacancyProperties Свойства варианта, такие как тариф, анонимность и другие */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyVariantVacancyProperties $vacancy_properties;
}
