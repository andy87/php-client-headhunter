<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesMatchListItem.
 */
class VacanciesMatchListItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'alternate_url' => 'alternate_url', 'apply_alternate_url' => 'apply_alternate_url', 'archived' => 'archived', 'area' => 'area', 'department' => 'department', 'employer' => 'employer', 'employment_form' => 'employment_form', 'has_test' => 'has_test', 'id' => 'id', 'name' => 'name', 'premium' => 'premium', 'published_at' => 'published_at', 'relations' => 'relations', 'response_letter_required' => 'response_letter_required', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'show_contacts' => 'show_contacts', 'show_logo_in_search' => 'show_logo_in_search', 'type' => 'type', 'url' => 'url', 'can_invite' => 'can_invite', 'created_at' => 'created_at', 'employer_negotiations_state' => 'employer_negotiations_state', 'manager' => 'manager', 'negotiations_actions' => 'negotiations_actions', 'negotiations_state' => 'negotiations_state', 'sort_point_distance' => 'sort_point_distance', 'templates' => 'templates', 'vacancy_constructor_template' => 'vacancy_constructor_template', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['id', 'premium', 'name', 'department', 'response_letter_required', 'area', 'salary', 'salary_range', 'published_at', 'archived', 'apply_alternate_url', 'url', 'alternate_url', 'relations', 'employer', 'has_test', 'negotiations_state', 'employer_negotiations_state', 'can_invite', 'negotiations_actions', 'manager', 'created_at'];

    protected const NULLABLE_FIELDS = ['address', 'response_url', 'salary_range', 'show_logo_in_search', 'employer_negotiations_state', 'negotiations_state', 'sort_point_distance', 'vacancy_constructor_template'];

    protected const CASTS = ['area' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea::class, 'department' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment::class, 'employer' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsEmployer::class, 'employment_form' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput::class, 'relations' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyRelationItem::class], 'salary' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'show_contacts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts::class, 'type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput::class, 'manager' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput::class, 'negotiations_actions' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyNegotiationActions::class], 'templates' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyTemplates::class], 'vacancy_properties' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties::class];

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

    /** @var bool Можно ли пригласить соискателя на данную вакансию */
    public bool $can_invite;

    /** @var string Дата и время публикации вакансии */
    public string $created_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Работодательское состояние отклика/приглашения для этой вакансии с указанным резюме, либо `null` если отклика/приглашения не было. Возможные значения перечислены в поле `employer_states` в [списке работодательских состояний по вакансии](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations) */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $employer_negotiations_state;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput Schema field manager */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput $manager;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyNegotiationActions> Действия для [создания отклика](#tag/Otklikipriglasheniya-rabotodatelya/operation/invite-applicant-to-vacancy). Если создать отклик невозможно (например, нет нужных услуг), то вернется пустой массив */
    public array $negotiations_actions;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Состояние отклика/приглашения для этой вакансии с указанным резюме, либо `null` если отклика/приглашения не было. Возможные значения перечислены в поле `negotiations_state` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $negotiations_state;

    /** @var float|null Расстояние в метрах между центром сортировки (заданной параметрами `sort_point_lat`, `sort_point_lng`) и указанным в вакансии адресом. В случае, если в адресе указаны только станции метро, выдается расстояние между центром сортировки и средней геометрической точкой указанных станций.
Значение `sort_point_distance` выдается только в случае, если заданы параметры `sort_point_lat`, `sort_point_lng`, `order_by=distance`
 */
    public ?float $sort_point_distance = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyTemplates>|null Шаблоны писем */
    public ?array $templates = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyConstructorTemplate|null Schema field vacancy_constructor_template */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyConstructorTemplate $vacancy_constructor_template = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties $vacancy_properties = null;
}
