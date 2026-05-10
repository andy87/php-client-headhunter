<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyManagerFields.
 */
class VacanciesVacancyManagerFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'archived_at' => 'archived_at', 'branded_template' => 'branded_template', 'can_upgrade_billing_type' => 'can_upgrade_billing_type', 'counters' => 'counters', 'expires_at' => 'expires_at', 'hidden' => 'hidden', 'manager' => 'manager', 'response_notifications' => 'response_notifications', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['expires_at', 'manager', 'response_notifications', 'hidden', 'branded_template', 'can_upgrade_billing_type', 'address'];

    protected const NULLABLE_FIELDS = ['archived_at'];

    protected const CASTS = ['address' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesAddress::class, 'branded_template' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate::class, 'can_upgrade_billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType::class, 'counters' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCountersOutput::class, 'expires_at' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt::class, 'hidden' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyHidden::class, 'manager' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerGet::class, 'response_notifications' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications::class, 'vacancy_properties' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesAddress Schema field address */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacanciesAddress $address;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyArchivedAt|null Schema field archived_at */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyArchivedAt $archived_at = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate Schema field branded_template */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate $branded_template;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType Schema field can_upgrade_billing_type */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType $can_upgrade_billing_type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCountersOutput|null Schema field counters */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCountersOutput $counters = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt Schema field expires_at */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt $expires_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyHidden Schema field hidden */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyHidden $hidden;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerGet Schema field manager */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerGet $manager;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications Schema field response_notifications */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications $response_notifications;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties $vacancy_properties = null;
}
