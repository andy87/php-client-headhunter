<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftVacancyDraftCreate.
 */
class VacancyDraftVacancyDraftCreate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accept_handicapped' => 'accept_handicapped', 'accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_kids' => 'accept_kids', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'address' => 'address', 'age_restriction' => 'age_restriction', 'allow_messages' => 'allow_messages', 'area' => 'area', 'areas' => 'areas', 'assigned_manager_id' => 'assigned_manager_id', 'auto_response' => 'auto_response', 'branded_template' => 'branded_template', 'civil_law_contracts' => 'civil_law_contracts', 'code' => 'code', 'contacts' => 'contacts', 'custom_employer_name' => 'custom_employer_name', 'department' => 'department', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'internship' => 'internship', 'key_skills' => 'key_skills', 'languages' => 'languages', 'name' => 'name', 'night_shifts' => 'night_shifts', 'professional_roles' => 'professional_roles', 'response_letter_required' => 'response_letter_required', 'response_notifications' => 'response_notifications', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'scheduled_at' => 'scheduled_at', 'test' => 'test', 'with_zp' => 'with_zp', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['scheduled_at'];

    protected const CASTS = ['assigned_manager_id' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManagerId::class, 'auto_response' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped|null Schema field accept_handicapped */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped $accept_handicapped = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes|null Schema field accept_incomplete_resumes */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes $accept_incomplete_resumes = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids|null Schema field accept_kids */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids $accept_kids = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null Schema field accept_labor_contract */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract $accept_labor_contract = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null Schema field accept_temporary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary $accept_temporary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAddress|null Schema field address */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAddress $address = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAgeRestriction|null Публикация вакансий для соискателей от 14 и 16 лет допустима только на территории Российской Федерации.
Права публиковать вакансии с пометкой для соискателей от 14 и 16 лет есть у подтвержденных Российских работодателей.
Для получения права для иностранной компании обратитесь к персональному менеджеру.

После получения права, появится возможность публиковать новые вакансии с данным параметром, либо обновлять имеющиеся вакансии
 */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAgeRestriction $age_restriction = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages|null Schema field allow_messages */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages $allow_messages = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyArea|null Schema field area */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyArea $area = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAreas|null Можно передать не более 50 элементов */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAreas $areas = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManagerId|null Schema field assigned_manager_id */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManagerId $assigned_manager_id = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null Schema field auto_response */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse $auto_response = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftBrandedTemplate|null Schema field branded_template */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftBrandedTemplate $branded_template = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContracts|null Schema field civil_law_contracts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContracts $civil_law_contracts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftCode|null Schema field code */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftCode $code = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftContacts|null Schema field contacts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftContacts $contacts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName|null Schema field custom_employer_name */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName $custom_employer_name = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDepartment|null Schema field department */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDepartment $department = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftDescription|null Schema field description */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftDescription $description = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes|null Schema field driver_license_types */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployment|null Schema field employment */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployment $employment = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentForm|null Schema field employment_form */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentForm $employment_form = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperience|null Schema field experience */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyExperience $experience = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDuration|null Список вариантов длительности вахты (в ближайшие полгода станет обязательным полем!) */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDuration $fly_in_fly_out_duration = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship|null Schema field internship */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship $internship = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftKeySkills|null Schema field key_skills */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftKeySkills $key_skills = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyLanguages|null Schema field languages */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyLanguages $languages = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftName|null Schema field name */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftName $name = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null Schema field night_shifts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts $night_shifts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftProfessionalRoles|null Schema field professional_roles */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftProfessionalRoles $professional_roles = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired|null Schema field response_letter_required */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications|null Schema field response_notifications */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications $response_notifications = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftResponseUrl|null Schema field response_url */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftResponseUrl $response_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary|null Schema field salary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySalary $salary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRange|null Schema field salary_range */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRange $salary_range = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySchedule|null Schema field schedule */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySchedule $schedule = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftScheduledAt|null Schema field scheduled_at */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftScheduledAt $scheduled_at = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest|null Schema field test */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest $test = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp|null Schema field with_zp */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp $with_zp = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormat|null Schema field work_format */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormat $work_format = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDays|null Schema field work_schedule_by_days */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDays $work_schedule_by_days = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDays|null Schema field working_days */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDays $working_days = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHours|null Schema field working_hours */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHours $working_hours = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervals|null Schema field working_time_intervals */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervals $working_time_intervals = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModes|null Schema field working_time_modes */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModes $working_time_modes = null;
}
