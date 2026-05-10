<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesActiveVacancyFields.
 */
class VacanciesActiveVacancyFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'can_upgrade_billing_type' => 'can_upgrade_billing_type', 'closed_for_applicants' => 'closed_for_applicants', 'counters' => 'counters', 'created_at' => 'created_at', 'expires_at' => 'expires_at', 'has_updates' => 'has_updates', 'manager' => 'manager', 'sort_point_distance' => 'sort_point_distance', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['counters', 'expires_at', 'manager', 'can_upgrade_billing_type', 'has_updates', 'created_at'];

    protected const NULLABLE_FIELDS = ['address', 'sort_point_distance'];

    protected const CASTS = ['can_upgrade_billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType::class, 'closed_for_applicants' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'counters' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCountersForActive::class, 'expires_at' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt::class, 'has_updates' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyHasUpdates::class, 'manager' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput::class, 'vacancy_properties' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesAddress|null Schema field address */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesAddress $address = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType Schema field can_upgrade_billing_type */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType $can_upgrade_billing_type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null Schema field closed_for_applicants */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCountersForActive Schema field counters */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyCountersForActive $counters;

    /** @var string Дата и время публикации вакансии */
    public string $created_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt Schema field expires_at */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt $expires_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyHasUpdates Schema field has_updates */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyHasUpdates $has_updates;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput Schema field manager */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput $manager;

    /** @var float|null Расстояние в метрах между центром сортировки (заданной параметрами `sort_point_lat`, `sort_point_lng`) и указанным в вакансии адресом. В случае, если в адресе указаны только станции метро, выдается расстояние между центром сортировки и средней геометрической точкой указанных станций.
Значение `sort_point_distance` выдается только в случае, если заданы параметры `sort_point_lat`, `sort_point_lng`, `order_by=distance`
 */
    public ?float $sort_point_distance = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties $vacancy_properties = null;
}
