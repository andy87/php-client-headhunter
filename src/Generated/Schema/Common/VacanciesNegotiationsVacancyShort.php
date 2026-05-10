<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesNegotiationsVacancyShort.
 */
class VacanciesNegotiationsVacancyShort extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'alternate_url' => 'alternate_url', 'apply_alternate_url' => 'apply_alternate_url', 'archived' => 'archived', 'area' => 'area', 'created_at' => 'created_at', 'department' => 'department', 'employer' => 'employer', 'has_test' => 'has_test', 'id' => 'id', 'insider_interview' => 'insider_interview', 'name' => 'name', 'premium' => 'premium', 'professional_roles' => 'professional_roles', 'published_at' => 'published_at', 'response_letter_required' => 'response_letter_required', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'show_contacts' => 'show_contacts', 'show_logo_in_search' => 'show_logo_in_search', 'sort_point_distance' => 'sort_point_distance', 'type' => 'type', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'premium', 'name', 'department', 'response_letter_required', 'area', 'salary', 'salary_range', 'type', 'published_at', 'archived', 'apply_alternate_url', 'url', 'alternate_url', 'employer', 'has_test', 'show_contacts'];

    protected const NULLABLE_FIELDS = ['response_url', 'salary_range', 'show_logo_in_search', 'sort_point_distance'];

    protected const CASTS = ['address' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput::class, 'area' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea::class, 'department' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment::class, 'employer' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer::class, 'insider_interview' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview::class, 'professional_roles' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput::class, 'salary' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'show_contacts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContactsNotNull::class, 'type' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyTypeOutput::class];

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

    /** @var string|null Дата и время публикации вакансии */
    public ?string $created_at = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment Schema field department */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment $department;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer Schema field employer */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer $employer;

    /** @var bool Информация о наличии прикрепленного тестового задании к вакансии */
    public bool $has_test;

    /** @var string Идентификатор вакансии */
    public string $id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview|null Schema field insider_interview */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview $insider_interview = null;

    /** @var string Название вакансии */
    public string $name;

    /** @var bool Является ли данная вакансия премиум-вакансией */
    public bool $premium;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput|null Schema field professional_roles */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput $professional_roles = null;

    /** @var string Дата и время публикации вакансии */
    public string $published_at;

    /** @var bool Обязательно ли заполнять сообщение при отклике на вакансию */
    public bool $response_letter_required;

    /** @var string|null URL отклика для прямых вакансий (`type.id=direct`) */
    public ?string $response_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary Schema field salary */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary $salary;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null Schema field salary_range */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput $salary_range;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContactsNotNull Schema field show_contacts */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContactsNotNull $show_contacts;

    /** @var bool|null Отображать ли лого для вакансии в поисковой выдаче */
    public ?bool $show_logo_in_search = null;

    /** @var float|null Расстояние в метрах между центром сортировки (заданной параметрами `sort_point_lat`, `sort_point_lng`) и указанным в вакансии адресом. В случае, если в адресе указаны только станции метро, выдается расстояние между центром сортировки и средней геометрической точкой указанных станций.
Значение `sort_point_distance` выдается только в случае, если заданы параметры `sort_point_lat`, `sort_point_lng`, `order_by=distance`
 */
    public ?float $sort_point_distance = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyTypeOutput Schema field type */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyTypeOutput $type;

    /** @var string URL вакансии */
    public string $url;
}
