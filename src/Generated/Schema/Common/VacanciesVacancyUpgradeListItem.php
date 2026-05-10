<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyUpgradeListItem.
 */
class VacanciesVacancyUpgradeListItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actions' => 'actions', 'appearance' => 'appearance', 'vacancy_billing_type' => 'vacancy_billing_type', 'vacancy_properties' => 'vacancy_properties', 'without_action' => 'without_action'];

    protected const REQUIRED_FIELDS = ['vacancy_billing_type', 'actions'];

    protected const NULLABLE_FIELDS = ['without_action'];

    protected const CASTS = ['actions' => [\and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsAction::class], 'appearance' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsAppearance::class, 'vacancy_billing_type' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsBillingTypeFull::class, 'vacancy_properties' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyVariantVacancyProperties::class];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsAction> Список возможных действий */
    public array $actions;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsAppearance|null Отображаемые названия варианта смены тарифа */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsAppearance $appearance = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsBillingTypeFull Schema field vacancy_billing_type */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacanciesUpgradeFieldsBillingTypeFull $vacancy_billing_type;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVariantVacancyProperties|null Свойства варианта улучшения (тариф, анонимность и другие) */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyVariantVacancyProperties $vacancy_properties = null;

    /** @var array<int, mixed>|null Объект с описанием причины, по которой невозможно улучшить вакансию до данного типа. `Null`, если массив `actions` не пустой */
    public ?array $without_action = null;
}
