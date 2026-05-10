<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyArchived.
 */
class VacanciesVacancyArchived extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'alternate_url' => 'alternate_url', 'apply_alternate_url' => 'apply_alternate_url', 'archived' => 'archived', 'area' => 'area', 'department' => 'department', 'employer' => 'employer', 'employment_form' => 'employment_form', 'has_test' => 'has_test', 'id' => 'id', 'name' => 'name', 'premium' => 'premium', 'published_at' => 'published_at', 'relations' => 'relations', 'response_letter_required' => 'response_letter_required', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'show_contacts' => 'show_contacts', 'show_logo_in_search' => 'show_logo_in_search', 'type' => 'type', 'url' => 'url', 'archived_at' => 'archived_at', 'closed_for_applicants' => 'closed_for_applicants', 'counters' => 'counters', 'created_at' => 'created_at', 'sort_point_distance' => 'sort_point_distance', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['id', 'premium', 'name', 'department', 'response_letter_required', 'area', 'salary', 'salary_range', 'published_at', 'archived', 'apply_alternate_url', 'url', 'alternate_url', 'relations', 'employer', 'has_test', 'counters', 'vacancy_properties', 'closed_for_applicants', 'archived_at', 'created_at'];

    protected const NULLABLE_FIELDS = ['response_url', 'salary_range', 'show_logo_in_search', 'sort_point_distance'];

    protected const CASTS = ['address' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput::class, 'area' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea::class, 'department' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment::class, 'employer' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer::class, 'employment_form' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput::class, 'relations' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyRelationItem::class], 'salary' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'show_contacts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts::class, 'type' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput::class, 'closed_for_applicants' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'counters' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersForArchivedOrHidden::class, 'vacancy_properties' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput|null Schema field address */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput $address = null;

    /** @var string Ссылка на представление вакансии на сайте */
    public string $alternate_url;

    /** @var string Ссылка на отклик на вакансию на сайте */
    public string $apply_alternate_url;

    /** @var bool Находится ли данная вакансия в архиве */
    public bool $archived;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea Schema field area */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea $area;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment Schema field department */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment $department;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer Schema field employer */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer $employer;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput|null Schema field employment_form */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput $employment_form = null;

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

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyRelationItem> Возвращает связи соискателя с вакансией. Значения из поля `vacancy_relation` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public array $relations;

    /** @var bool Обязательно ли заполнять сообщение при отклике на вакансию */
    public bool $response_letter_required;

    /** @var string|null URL отклика для прямых вакансий (`type.id=direct`) */
    public ?string $response_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary Schema field salary */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary $salary;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null Schema field salary_range */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput $salary_range;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts|null Schema field show_contacts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts $show_contacts = null;

    /** @var bool|null Отображать ли лого для вакансии в поисковой выдаче */
    public ?bool $show_logo_in_search = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput|null Schema field type */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput $type = null;

    /** @var string URL вакансии */
    public string $url;

    /** @var string Дата и время архивации вакансии */
    public string $archived_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants Schema field closed_for_applicants */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersForArchivedOrHidden Schema field counters */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersForArchivedOrHidden $counters;

    /** @var string Дата и время публикации вакансии */
    public string $created_at;

    /** @var float|null Расстояние в метрах между центром сортировки (заданной параметрами `sort_point_lat`, `sort_point_lng`) и указанным в вакансии адресом. В случае, если в адресе указаны только станции метро, выдается расстояние между центром сортировки и средней геометрической точкой указанных станций.

Значение `sort_point_distance` выдается только в случае, если заданы параметры `sort_point_lat`, `sort_point_lng`, `order_by=distance`
 */
    public ?float $sort_point_distance = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties Свойства вакансии, такие как тариф, анонимность и другие */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties $vacancy_properties;
}
