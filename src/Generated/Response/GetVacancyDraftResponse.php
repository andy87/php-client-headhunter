<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/drafts/{draft_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-draft
 */
class GetVacancyDraftResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['accept_handicapped' => 'accept_handicapped', 'accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_kids' => 'accept_kids', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'age_restriction' => 'age_restriction', 'allow_messages' => 'allow_messages', 'auto_response' => 'auto_response', 'billing_type' => 'billing_type', 'civil_law_contracts' => 'civil_law_contracts', 'code' => 'code', 'department' => 'department', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'has_test' => 'has_test', 'internship' => 'internship', 'key_skills' => 'key_skills', 'languages' => 'languages', 'manager' => 'manager', 'name' => 'name', 'night_shifts' => 'night_shifts', 'professional_roles' => 'professional_roles', 'response_letter_required' => 'response_letter_required', 'response_notifications' => 'response_notifications', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'test' => 'test', 'type' => 'type', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes', 'address' => 'address', 'areas' => 'areas', 'assigned_manager' => 'assigned_manager', 'branded_template' => 'branded_template', 'closed_for_applicants' => 'closed_for_applicants', 'contacts' => 'contacts', 'custom_employer_name' => 'custom_employer_name', 'employer' => 'employer', 'meta_info' => 'meta_info', 'vacancy_properties' => 'vacancy_properties', 'with_zp' => 'with_zp'];

    protected const REQUIRED_FIELDS = ['name', 'description', 'key_skills', 'accept_handicapped', 'accept_kids', 'experience', 'response_letter_required', 'type', 'billing_type', 'allow_messages', 'driver_license_types', 'accept_incomplete_resumes', 'professional_roles', 'manager', 'languages', 'response_notifications', 'has_test', 'meta_info', 'areas', 'address', 'contacts', 'employer', 'with_zp'];

    protected const NULLABLE_FIELDS = ['age_restriction', 'salary_range'];

    protected const CASTS = ['accept_handicapped' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped::class, 'accept_incomplete_resumes' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes::class, 'accept_kids' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids::class, 'accept_labor_contract' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract::class, 'accept_temporary' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary::class, 'allow_messages' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages::class, 'auto_response' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse::class, 'billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput::class, 'civil_law_contracts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput::class, 'code' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCode::class, 'department' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDepartmentOutput::class, 'description' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription::class, 'driver_license_types' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes::class, 'employment' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput::class, 'employment_form' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput::class, 'experience' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput::class, 'fly_in_fly_out_duration' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput::class, 'internship' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship::class, 'key_skills' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyKeySkills::class, 'languages' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyLanguagesOutput::class, 'manager' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerGet::class, 'name' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyName::class, 'night_shifts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts::class, 'professional_roles' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput::class, 'response_letter_required' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired::class, 'response_notifications' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications::class, 'response_url' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl::class, 'salary' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'schedule' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput::class, 'test' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest::class, 'type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput::class, 'work_format' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput::class, 'work_schedule_by_days' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput::class, 'working_days' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput::class, 'working_hours' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput::class, 'working_time_intervals' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput::class, 'working_time_modes' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput::class, 'address' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAddressOutput::class, 'areas' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyAreaOutput::class], 'assigned_manager' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManager::class, 'branded_template' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate::class, 'closed_for_applicants' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'contacts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftContactsWithFullPhone::class, 'custom_employer_name' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName::class, 'employer' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployer::class, 'meta_info' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftBase::class, 'vacancy_properties' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyProperties::class, 'with_zp' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp::class];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftFull::class;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped Response field accept_handicapped */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped $accept_handicapped;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes Response field accept_incomplete_resumes */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes $accept_incomplete_resumes;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids Response field accept_kids */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids $accept_kids;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null Response field accept_labor_contract */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract $accept_labor_contract = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null Response field accept_temporary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary $accept_temporary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAgeRestrictionOutput|null Response field age_restriction */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAgeRestrictionOutput $age_restriction = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages Response field allow_messages */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages $allow_messages;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null Response field auto_response */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse $auto_response = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput Заменён на параметр [vacancy_properties](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list) */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput $billing_type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput|null Response field civil_law_contracts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput $civil_law_contracts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCode|null Response field code */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCode $code = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDepartmentOutput|null Response field department */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDepartmentOutput $department = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription Response field description */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription $description;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes Response field driver_license_types */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput|null Response field employment */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput $employment = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput|null Response field employment_form */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput $employment_form = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput Response field experience */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput $experience;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput|null Response field fly_in_fly_out_duration */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput $fly_in_fly_out_duration = null;

    /** @var bool Информация о наличии прикрепленного тестового задании к вакансии */
    public bool $has_test;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship|null Response field internship */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship $internship = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyKeySkills Response field key_skills */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyKeySkills $key_skills;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyLanguagesOutput Response field languages */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyLanguagesOutput $languages;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerGet Response field manager */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerGet $manager;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyName Response field name */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyName $name;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null Response field night_shifts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts $night_shifts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput Response field professional_roles */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput $professional_roles;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired Response field response_letter_required */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications Response field response_notifications */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications $response_notifications;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl|null Response field response_url */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl $response_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary|null Response field salary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySalary $salary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null Response field salary_range */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput $salary_range = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput|null Response field schedule */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput $schedule = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest|null Response field test */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest $test = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput Значение open/close заменены на closed_for_applicants, а anonymous,direct - на vacancy_properties (HH_ANONYMOUS, HH_ADVERTISING) */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput $type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput|null Response field work_format */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput $work_format = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput|null Response field work_schedule_by_days */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput $work_schedule_by_days = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput|null Response field working_days */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput $working_days = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput|null Response field working_hours */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput $working_hours = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput|null Response field working_time_intervals */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput $working_time_intervals = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput|null Response field working_time_modes */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput $working_time_modes = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAddressOutput Response field address */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAddressOutput $address;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyAreaOutput> Коды и названия регионов (фед. округа, субъекты федерации, города) */
    public array $areas;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManager|null Response field assigned_manager */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManager $assigned_manager = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate|null Response field branded_template */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate $branded_template = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null Response field closed_for_applicants */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftContactsWithFullPhone Response field contacts */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftContactsWithFullPhone $contacts;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName|null Response field custom_employer_name */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName $custom_employer_name = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployer Response field employer */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployer $employer;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftBase Response field meta_info */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftBase $meta_info;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyProperties $vacancy_properties = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp Response field with_zp */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp $with_zp;
}
