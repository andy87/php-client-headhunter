<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyManagerFields.
 */
class VacanciesVacancyManagerFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'archived_at' => 'archived_at', 'branded_template' => 'branded_template', 'can_upgrade_billing_type' => 'can_upgrade_billing_type', 'counters' => 'counters', 'expires_at' => 'expires_at', 'hidden' => 'hidden', 'manager' => 'manager', 'response_notifications' => 'response_notifications', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['expires_at', 'manager', 'response_notifications', 'hidden', 'branded_template', 'can_upgrade_billing_type', 'address'];

    protected const NULLABLE_FIELDS = ['archived_at'];

    protected const CASTS = ['address' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesAddress::class, 'branded_template' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate::class, 'can_upgrade_billing_type' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType::class, 'counters' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersOutput::class, 'expires_at' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt::class, 'hidden' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyHidden::class, 'manager' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyManagerGet::class, 'response_notifications' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications::class, 'vacancy_properties' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesAddress Schema field address */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacanciesAddress $address;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyArchivedAt|null Schema field archived_at */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyArchivedAt $archived_at = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate Schema field branded_template */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate $branded_template;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType Schema field can_upgrade_billing_type */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType $can_upgrade_billing_type;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersOutput|null Schema field counters */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersOutput $counters = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt Schema field expires_at */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt $expires_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyHidden Schema field hidden */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyHidden $hidden;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyManagerGet Schema field manager */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyManagerGet $manager;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications Schema field response_notifications */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications $response_notifications;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties $vacancy_properties = null;
}
