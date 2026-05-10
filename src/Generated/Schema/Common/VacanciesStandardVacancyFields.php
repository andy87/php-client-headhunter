<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesStandardVacancyFields.
 */
class VacanciesStandardVacancyFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'address' => 'address', 'alternate_url' => 'alternate_url', 'apply_alternate_url' => 'apply_alternate_url', 'archived' => 'archived', 'area' => 'area', 'civil_law_contracts' => 'civil_law_contracts', 'contacts' => 'contacts', 'created_at' => 'created_at', 'department' => 'department', 'employer' => 'employer', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'has_test' => 'has_test', 'id' => 'id', 'insider_interview' => 'insider_interview', 'internship' => 'internship', 'metro_stations' => 'metro_stations', 'name' => 'name', 'night_shifts' => 'night_shifts', 'premium' => 'premium', 'professional_roles' => 'professional_roles', 'published_at' => 'published_at', 'relations' => 'relations', 'response_letter_required' => 'response_letter_required', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'show_contacts' => 'show_contacts', 'sort_point_distance' => 'sort_point_distance', 'type' => 'type', 'url' => 'url', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'department', 'has_test', 'response_letter_required', 'area', 'salary', 'salary_range', 'type', 'published_at', 'apply_alternate_url', 'url', 'alternate_url', 'relations', 'employer', 'accept_incomplete_resumes', 'professional_roles'];

    protected const NULLABLE_FIELDS = ['archived', 'premium', 'salary_range', 'schedule'];

    protected const CASTS = ['accept_incomplete_resumes' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes::class, 'accept_labor_contract' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract::class, 'accept_temporary' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary::class, 'address' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput::class, 'area' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea::class, 'civil_law_contracts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput::class, 'contacts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput::class, 'department' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment::class, 'employer' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesEmployerPublic::class, 'fly_in_fly_out_duration' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput::class, 'insider_interview' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview::class, 'internship' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship::class, 'metro_stations' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesMetroStation::class, 'name' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyName::class, 'night_shifts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts::class, 'professional_roles' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput::class, 'relations' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyRelations::class, 'response_letter_required' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired::class, 'response_url' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl::class, 'salary' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'show_contacts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts::class, 'sort_point_distance' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance::class, 'type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyTypeOutput::class, 'work_format' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput::class, 'work_schedule_by_days' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput::class, 'working_days' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput::class, 'working_hours' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput::class, 'working_time_intervals' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput::class, 'working_time_modes' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes Schema field accept_incomplete_resumes */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes $accept_incomplete_resumes;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null Schema field accept_labor_contract */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract $accept_labor_contract = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null Schema field accept_temporary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary $accept_temporary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput|null Schema field address */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput $address = null;

    /** @var string Ссылка на представление вакансии на сайте */
    public string $alternate_url;

    /** @var string Ссылка на отклик на вакансию на сайте */
    public string $apply_alternate_url;

    /** @var bool|null Находится ли данная вакансия в архиве */
    public ?bool $archived = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea Schema field area */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea $area;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput|null Schema field civil_law_contracts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput $civil_law_contracts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput|null Schema field contacts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput $contacts = null;

    /** @var string|null Дата и время публикации вакансии */
    public ?string $created_at = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment Schema field department */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment $department;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesEmployerPublic Schema field employer */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacanciesEmployerPublic $employer;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput|null Schema field fly_in_fly_out_duration */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput $fly_in_fly_out_duration = null;

    /** @var bool Информация о наличии прикрепленного тестового задании к вакансии */
    public bool $has_test;

    /** @var string Идентификатор вакансии */
    public string $id;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview|null Schema field insider_interview */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview $insider_interview = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship|null Schema field internship */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship $internship = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesMetroStation|null Schema field metro_stations */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesMetroStation $metro_stations = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyName Schema field name */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyName $name;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null Schema field night_shifts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts $night_shifts = null;

    /** @var bool|null Является ли данная вакансия премиум-вакансией */
    public ?bool $premium = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput Schema field professional_roles */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput $professional_roles;

    /** @var string Дата и время публикации вакансии */
    public string $published_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyRelations Schema field relations */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyRelations $relations;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired Schema field response_letter_required */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl|null Schema field response_url */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl $response_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary Schema field salary */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary $salary;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null Schema field salary_range */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput $salary_range;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput|null Schema field schedule */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput $schedule = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts|null Schema field show_contacts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts $show_contacts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance|null Schema field sort_point_distance */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance $sort_point_distance = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyTypeOutput Schema field type */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyTypeOutput $type;

    /** @var string URL вакансии */
    public string $url;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput|null Schema field work_format */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput $work_format = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput|null Schema field work_schedule_by_days */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput $work_schedule_by_days = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput|null Schema field working_days */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput $working_days = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput|null Schema field working_hours */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput $working_hours = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput|null Schema field working_time_intervals */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput $working_time_intervals = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput|null Schema field working_time_modes */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput $working_time_modes = null;
}
