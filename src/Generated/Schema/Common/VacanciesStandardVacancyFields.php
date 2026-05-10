<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesStandardVacancyFields.
 */
class VacanciesStandardVacancyFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'address' => 'address', 'alternate_url' => 'alternate_url', 'apply_alternate_url' => 'apply_alternate_url', 'archived' => 'archived', 'area' => 'area', 'civil_law_contracts' => 'civil_law_contracts', 'contacts' => 'contacts', 'created_at' => 'created_at', 'department' => 'department', 'employer' => 'employer', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'has_test' => 'has_test', 'id' => 'id', 'insider_interview' => 'insider_interview', 'internship' => 'internship', 'metro_stations' => 'metro_stations', 'name' => 'name', 'night_shifts' => 'night_shifts', 'premium' => 'premium', 'professional_roles' => 'professional_roles', 'published_at' => 'published_at', 'relations' => 'relations', 'response_letter_required' => 'response_letter_required', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'show_contacts' => 'show_contacts', 'sort_point_distance' => 'sort_point_distance', 'type' => 'type', 'url' => 'url', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'department', 'has_test', 'response_letter_required', 'area', 'salary', 'salary_range', 'type', 'published_at', 'apply_alternate_url', 'url', 'alternate_url', 'relations', 'employer', 'accept_incomplete_resumes', 'professional_roles'];

    protected const NULLABLE_FIELDS = ['archived', 'premium', 'salary_range', 'schedule'];

    protected const CASTS = ['accept_incomplete_resumes' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes::class, 'accept_labor_contract' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract::class, 'accept_temporary' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary::class, 'address' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput::class, 'area' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea::class, 'civil_law_contracts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput::class, 'contacts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput::class, 'department' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment::class, 'employer' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesEmployerPublic::class, 'fly_in_fly_out_duration' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput::class, 'insider_interview' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview::class, 'internship' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship::class, 'metro_stations' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesMetroStation::class, 'name' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyName::class, 'night_shifts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts::class, 'professional_roles' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput::class, 'relations' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyRelations::class, 'response_letter_required' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired::class, 'response_url' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl::class, 'salary' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'show_contacts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts::class, 'sort_point_distance' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance::class, 'type' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyTypeOutput::class, 'work_format' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput::class, 'work_schedule_by_days' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput::class, 'working_days' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput::class, 'working_hours' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput::class, 'working_time_intervals' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput::class, 'working_time_modes' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes Schema field accept_incomplete_resumes */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes $accept_incomplete_resumes;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null Schema field accept_labor_contract */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract $accept_labor_contract = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null Schema field accept_temporary */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary $accept_temporary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput|null Schema field address */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAddressRawOutput $address = null;

    /** @var string Ссылка на представление вакансии на сайте */
    public string $alternate_url;

    /** @var string Ссылка на отклик на вакансию на сайте */
    public string $apply_alternate_url;

    /** @var bool|null Находится ли данная вакансия в архиве */
    public ?bool $archived = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea Schema field area */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea $area;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput|null Schema field civil_law_contracts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput $civil_law_contracts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput|null Schema field contacts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput $contacts = null;

    /** @var string|null Дата и время публикации вакансии */
    public ?string $created_at = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment Schema field department */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment $department;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesEmployerPublic Schema field employer */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacanciesEmployerPublic $employer;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput|null Schema field fly_in_fly_out_duration */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput $fly_in_fly_out_duration = null;

    /** @var bool Информация о наличии прикрепленного тестового задании к вакансии */
    public bool $has_test;

    /** @var string Идентификатор вакансии */
    public string $id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview|null Schema field insider_interview */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview $insider_interview = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship|null Schema field internship */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship $internship = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesMetroStation|null Schema field metro_stations */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesMetroStation $metro_stations = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyName Schema field name */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyName $name;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null Schema field night_shifts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts $night_shifts = null;

    /** @var bool|null Является ли данная вакансия премиум-вакансией */
    public ?bool $premium = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput Schema field professional_roles */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput $professional_roles;

    /** @var string Дата и время публикации вакансии */
    public string $published_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyRelations Schema field relations */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyRelations $relations;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired Schema field response_letter_required */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl|null Schema field response_url */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl $response_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary Schema field salary */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary $salary;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null Schema field salary_range */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput $salary_range;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput|null Schema field schedule */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput $schedule = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts|null Schema field show_contacts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts $show_contacts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance|null Schema field sort_point_distance */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySortPointDistance $sort_point_distance = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyTypeOutput Schema field type */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyTypeOutput $type;

    /** @var string URL вакансии */
    public string $url;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput|null Schema field work_format */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput $work_format = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput|null Schema field work_schedule_by_days */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput $work_schedule_by_days = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput|null Schema field working_days */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput $working_days = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput|null Schema field working_hours */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput $working_hours = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput|null Schema field working_time_intervals */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput $working_time_intervals = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput|null Schema field working_time_modes */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput $working_time_modes = null;
}
