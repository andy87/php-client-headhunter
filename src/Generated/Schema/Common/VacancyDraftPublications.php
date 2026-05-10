<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftPublications.
 */
class VacancyDraftPublications extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['appearance' => 'appearance', 'billing_type' => 'billing_type', 'count' => 'count', 'publication_type' => 'publication_type', 'vacancy_properties' => 'vacancy_properties', 'vacancy_type' => 'vacancy_type'];

    protected const REQUIRED_FIELDS = ['publication_type', 'billing_type', 'vacancy_type', 'vacancy_properties', 'count'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['appearance' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance::class, 'billing_type' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput::class, 'vacancy_properties' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyVariantVacancyProperties::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance|null Название варианта публикации для отображения */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyPropertiesAppearance $appearance = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput Биллинговый тип [из справочника vacancy_billing_type](#tag/Obshie-spravochniki/operation/get-dictionaries). Устарело, используйте `vacancy_properties` */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput $billing_type;

    /** @var float Количество публикаций */
    public float $count;

    /** @var string Тип публикации (справочник [vacancy_billing_type](#tag/Obshie-spravochniki/operation/get-dictionaries)). Устарело, используйте `vacancy_properties` */
    public string $publication_type;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVariantVacancyProperties Свойства варианта публикации (тариф, анонимность и другие) */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyVariantVacancyProperties $vacancy_properties;

    /** @var string Тип вакансии (справочник [vacancy_type](#tag/Obshie-spravochniki/operation/get-dictionaries)). Устарело, для новых интеграций не используйте */
    public string $vacancy_type;
}
