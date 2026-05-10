<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesActiveListItem.
 */
class VacanciesActiveListItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'alternate_url' => 'alternate_url', 'apply_alternate_url' => 'apply_alternate_url', 'archived' => 'archived', 'area' => 'area', 'department' => 'department', 'employer' => 'employer', 'employment_form' => 'employment_form', 'has_test' => 'has_test', 'id' => 'id', 'name' => 'name', 'premium' => 'premium', 'published_at' => 'published_at', 'relations' => 'relations', 'response_letter_required' => 'response_letter_required', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'show_contacts' => 'show_contacts', 'show_logo_in_search' => 'show_logo_in_search', 'type' => 'type', 'url' => 'url', 'billing_type' => 'billing_type', 'can_upgrade_billing_type' => 'can_upgrade_billing_type', 'closed_for_applicants' => 'closed_for_applicants', 'counters' => 'counters', 'created_at' => 'created_at', 'expires_at' => 'expires_at', 'has_updates' => 'has_updates', 'manager' => 'manager', 'sort_point_distance' => 'sort_point_distance', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['id', 'premium', 'name', 'department', 'response_letter_required', 'area', 'salary', 'salary_range', 'published_at', 'archived', 'apply_alternate_url', 'url', 'alternate_url', 'relations', 'employer', 'has_test', 'counters', 'expires_at', 'manager', 'can_upgrade_billing_type', 'has_updates', 'created_at'];

    protected const NULLABLE_FIELDS = ['address', 'response_url', 'salary_range', 'show_logo_in_search', 'sort_point_distance'];

    protected const CASTS = ['area' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea::class, 'department' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment::class, 'employer' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer::class, 'employment_form' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput::class, 'relations' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyRelationItem::class], 'salary' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'show_contacts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts::class, 'type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput::class, 'billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput::class, 'can_upgrade_billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType::class, 'closed_for_applicants' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'counters' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCountersForActive::class, 'expires_at' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt::class, 'has_updates' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyHasUpdates::class, 'manager' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput::class, 'vacancy_properties' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesAddress|null Schema field address */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesAddress $address = null;

    /** @var string Ссылка на представление вакансии на сайте */
    public string $alternate_url;

    /** @var string Ссылка на отклик на вакансию на сайте */
    public string $apply_alternate_url;

    /** @var bool Находится ли данная вакансия в архиве */
    public bool $archived;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea Schema field area */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea $area;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment Schema field department */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment $department;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer Schema field employer */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer $employer;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput|null Schema field employment_form */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput $employment_form = null;

    /** @var bool Информация о наличии прикрепленного тестового задании к вакансии */
    public bool $has_test;

    /** @var string Идентификатор вакансии */
    public string $id;

    /** @var string Название вакансии */
    public string $name;

    /** @var bool Заменён на параметр [vacancy_properties](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list) */
    public bool $premium;

    /** @var string Дата и время публикации вакансии */
    public string $published_at;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyRelationItem> Возвращает связи соискателя с вакансией. Значения из поля `vacancy_relation` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public array $relations;

    /** @var bool Обязательно ли заполнять сообщение при отклике на вакансию */
    public bool $response_letter_required;

    /** @var string|null URL отклика для прямых вакансий (`type.id=direct`) */
    public ?string $response_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary Schema field salary */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary $salary;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null Schema field salary_range */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput $salary_range;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts|null Schema field show_contacts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts $show_contacts = null;

    /** @var bool|null Отображать ли лого для вакансии в поисковой выдаче */
    public ?bool $show_logo_in_search = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput|null Schema field type */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput $type = null;

    /** @var string URL вакансии */
    public string $url;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput|null Schema field billing_type */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput $billing_type = null;

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
