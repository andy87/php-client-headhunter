<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyForManager.
 */
class VacanciesVacancyForManager extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accept_handicapped' => 'accept_handicapped', 'accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_kids' => 'accept_kids', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'age_restriction' => 'age_restriction', 'allow_messages' => 'allow_messages', 'alternate_url' => 'alternate_url', 'apply_alternate_url' => 'apply_alternate_url', 'approved' => 'approved', 'archived' => 'archived', 'area' => 'area', 'auto_response' => 'auto_response', 'billing_type' => 'billing_type', 'branded_description' => 'branded_description', 'civil_law_contracts' => 'civil_law_contracts', 'closed_for_applicants' => 'closed_for_applicants', 'code' => 'code', 'contacts' => 'contacts', 'created_at' => 'created_at', 'department' => 'department', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'employer' => 'employer', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'has_test' => 'has_test', 'id' => 'id', 'initial_created_at' => 'initial_created_at', 'insider_interview' => 'insider_interview', 'internship' => 'internship', 'key_skills' => 'key_skills', 'languages' => 'languages', 'name' => 'name', 'negotiations_url' => 'negotiations_url', 'night_shifts' => 'night_shifts', 'premium' => 'premium', 'professional_roles' => 'professional_roles', 'published_at' => 'published_at', 'relations' => 'relations', 'response_letter_required' => 'response_letter_required', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'show_contacts' => 'show_contacts', 'suitable_resumes_url' => 'suitable_resumes_url', 'test' => 'test', 'type' => 'type', 'vacancy_constructor_template' => 'vacancy_constructor_template', 'vacancy_properties' => 'vacancy_properties', 'video_vacancy' => 'video_vacancy', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes', 'address' => 'address', 'archived_at' => 'archived_at', 'branded_template' => 'branded_template', 'can_upgrade_billing_type' => 'can_upgrade_billing_type', 'counters' => 'counters', 'expires_at' => 'expires_at', 'hidden' => 'hidden', 'manager' => 'manager', 'response_notifications' => 'response_notifications', 'previous_id' => 'previous_id'];

    protected const REQUIRED_FIELDS = ['id', 'description', 'key_skills', 'accept_handicapped', 'accept_kids', 'experience', 'alternate_url', 'apply_alternate_url', 'archived', 'name', 'area', 'initial_created_at', 'created_at', 'published_at', 'response_letter_required', 'type', 'has_test', 'billing_type', 'allow_messages', 'premium', 'driver_license_types', 'accept_incomplete_resumes', 'professional_roles', 'approved', 'expires_at', 'manager', 'response_notifications', 'hidden', 'branded_template', 'can_upgrade_billing_type', 'address'];

    protected const NULLABLE_FIELDS = ['age_restriction', 'branded_description', 'employer', 'negotiations_url', 'salary_range', 'suitable_resumes_url', 'vacancy_constructor_template', 'video_vacancy', 'archived_at', 'previous_id'];

    protected const CASTS = ['accept_handicapped' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped::class, 'accept_incomplete_resumes' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes::class, 'accept_kids' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids::class, 'accept_labor_contract' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract::class, 'accept_temporary' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary::class, 'allow_messages' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages::class, 'alternate_url' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAlternateUrl::class, 'apply_alternate_url' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyApplyAlternateUrl::class, 'approved' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyApproved::class, 'archived' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyArchived::class, 'area' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea::class, 'auto_response' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse::class, 'billing_type' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput::class, 'civil_law_contracts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput::class, 'closed_for_applicants' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'code' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCode::class, 'contacts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput::class, 'created_at' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt::class, 'department' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment::class, 'description' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDescription::class, 'driver_license_types' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes::class, 'employment' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput::class, 'employment_form' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput::class, 'experience' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput::class, 'fly_in_fly_out_duration' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput::class, 'has_test' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyHasTest::class, 'id' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyId::class, 'initial_created_at' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyInitialCreatedAt::class, 'insider_interview' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview::class, 'internship' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship::class, 'key_skills' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyKeySkills::class, 'name' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyName::class, 'night_shifts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts::class, 'premium' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyPremium::class, 'professional_roles' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput::class, 'published_at' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt::class, 'relations' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyRelations::class, 'response_letter_required' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired::class, 'response_url' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl::class, 'salary' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'schedule' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput::class, 'show_contacts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts::class, 'test' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftTest::class, 'type' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class, 'vacancy_properties' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties::class, 'work_format' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput::class, 'work_schedule_by_days' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput::class, 'working_days' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput::class, 'working_hours' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput::class, 'working_time_intervals' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput::class, 'working_time_modes' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput::class, 'address' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesAddress::class, 'branded_template' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate::class, 'can_upgrade_billing_type' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType::class, 'counters' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersOutput::class, 'expires_at' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt::class, 'hidden' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyHidden::class, 'manager' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyManagerGet::class, 'response_notifications' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped Schema field accept_handicapped */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped $accept_handicapped;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes Schema field accept_incomplete_resumes */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes $accept_incomplete_resumes;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids Schema field accept_kids */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids $accept_kids;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null Schema field accept_labor_contract */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract $accept_labor_contract = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null Schema field accept_temporary */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary $accept_temporary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAgeRestrictionOutput|null Schema field age_restriction */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAgeRestrictionOutput $age_restriction = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages Schema field allow_messages */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages $allow_messages;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAlternateUrl Schema field alternate_url */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyAlternateUrl $alternate_url;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyApplyAlternateUrl Schema field apply_alternate_url */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyApplyAlternateUrl $apply_alternate_url;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyApproved Schema field approved */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyApproved $approved;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyArchived Schema field archived */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyArchived $archived;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea Schema field area */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea $area;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null Schema field auto_response */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse $auto_response = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput Schema field billing_type */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput $billing_type;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedDescription|null Schema field branded_description */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedDescription $branded_description = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput|null Schema field civil_law_contracts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput $civil_law_contracts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null Schema field closed_for_applicants */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCode|null Schema field code */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCode $code = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput|null Schema field contacts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput $contacts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt Schema field created_at */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt $created_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment|null Schema field department */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment $department = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDescription Schema field description */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyDescription $description;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes Schema field driver_license_types */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyEmployer|null Schema field employer */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyEmployer $employer = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput|null Schema field employment */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput $employment = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput|null Schema field employment_form */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput $employment_form = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput Schema field experience */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput $experience;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput|null Schema field fly_in_fly_out_duration */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput $fly_in_fly_out_duration = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyHasTest Schema field has_test */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyHasTest $has_test;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyId Schema field id */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyId $id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyInitialCreatedAt Schema field initial_created_at */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyInitialCreatedAt $initial_created_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview|null Schema field insider_interview */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview $insider_interview = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship|null Schema field internship */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship $internship = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyKeySkills Schema field key_skills */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyKeySkills $key_skills;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyLanguagesOutput|null Schema field languages */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyLanguagesOutput $languages = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyName Schema field name */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyName $name;

    /** @var string|null Ссылка для получения списка откликов/приглашений */
    public ?string $negotiations_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null Schema field night_shifts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts $night_shifts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyPremium Schema field premium */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyPremium $premium;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput Schema field professional_roles */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput $professional_roles;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt Schema field published_at */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt $published_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyRelations|null Schema field relations */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyRelations $relations = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired Schema field response_letter_required */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl|null Schema field response_url */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl $response_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary|null Schema field salary */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalary $salary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null Schema field salary_range */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput $salary_range = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput|null Schema field schedule */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput $schedule = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts|null Schema field show_contacts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts $show_contacts = null;

    /** @var string|null Подходящие резюме на вакансию */
    public ?string $suitable_resumes_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftTest|null Schema field test */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftTest $test = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName Идентификатор типа вакансии из справочника [`vacancy_type`](https://api.hh.ru/openapi/redoc#tag/Obshie-spravochniki/operation/get-dictionaries). Значение open/close заменены на closed_for_applicants, а anonymous,direct - на vacancy_properties (HH_ANONYMOUS, HH_ADVERTISING) */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $type;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyConstructorTemplate|null Schema field vacancy_constructor_template */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyConstructorTemplate $vacancy_constructor_template = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties $vacancy_properties = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideoVacancyItem|null Schema field video_vacancy */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideoVacancyItem $video_vacancy = null;

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

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesAddress Schema field address */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacanciesAddress $address;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyArchivedAt|null Schema field archived_at */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyArchivedAt $archived_at = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate Schema field branded_template */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate $branded_template;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType Schema field can_upgrade_billing_type */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyCanUpgradeBillingType $can_upgrade_billing_type;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersOutput|null Schema field counters */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersOutput $counters = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt Schema field expires_at */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyExpiresAt $expires_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyHidden Schema field hidden */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyHidden $hidden;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyManagerGet Schema field manager */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyManagerGet $manager;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications Schema field response_notifications */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications $response_notifications;

    /** @var string|null Идентификатор архивной вакансии, на основе которой была опубликована текущая вакансия. Если вакансия была создана самостоятельно - null */
    public ?string $previous_id = null;
}
