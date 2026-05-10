<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyCommonFields.
 */
class VacanciesVacancyCommonFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accept_handicapped' => 'accept_handicapped', 'accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_kids' => 'accept_kids', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'age_restriction' => 'age_restriction', 'allow_messages' => 'allow_messages', 'alternate_url' => 'alternate_url', 'apply_alternate_url' => 'apply_alternate_url', 'approved' => 'approved', 'archived' => 'archived', 'area' => 'area', 'auto_response' => 'auto_response', 'billing_type' => 'billing_type', 'branded_description' => 'branded_description', 'civil_law_contracts' => 'civil_law_contracts', 'closed_for_applicants' => 'closed_for_applicants', 'code' => 'code', 'contacts' => 'contacts', 'created_at' => 'created_at', 'department' => 'department', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'employer' => 'employer', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'has_test' => 'has_test', 'id' => 'id', 'initial_created_at' => 'initial_created_at', 'insider_interview' => 'insider_interview', 'internship' => 'internship', 'key_skills' => 'key_skills', 'languages' => 'languages', 'name' => 'name', 'negotiations_url' => 'negotiations_url', 'night_shifts' => 'night_shifts', 'premium' => 'premium', 'professional_roles' => 'professional_roles', 'published_at' => 'published_at', 'relations' => 'relations', 'response_letter_required' => 'response_letter_required', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'show_contacts' => 'show_contacts', 'suitable_resumes_url' => 'suitable_resumes_url', 'test' => 'test', 'type' => 'type', 'vacancy_constructor_template' => 'vacancy_constructor_template', 'vacancy_properties' => 'vacancy_properties', 'video_vacancy' => 'video_vacancy', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes'];

    protected const REQUIRED_FIELDS = ['id', 'description', 'key_skills', 'accept_handicapped', 'accept_kids', 'experience', 'alternate_url', 'apply_alternate_url', 'archived', 'name', 'area', 'initial_created_at', 'created_at', 'published_at', 'response_letter_required', 'type', 'has_test', 'billing_type', 'allow_messages', 'premium', 'driver_license_types', 'accept_incomplete_resumes', 'professional_roles', 'approved'];

    protected const NULLABLE_FIELDS = ['age_restriction', 'branded_description', 'employer', 'negotiations_url', 'salary_range', 'suitable_resumes_url', 'vacancy_constructor_template', 'video_vacancy'];

    protected const CASTS = ['accept_handicapped' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped::class, 'accept_incomplete_resumes' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes::class, 'accept_kids' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids::class, 'accept_labor_contract' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract::class, 'accept_temporary' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary::class, 'allow_messages' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages::class, 'alternate_url' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAlternateUrl::class, 'apply_alternate_url' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyApplyAlternateUrl::class, 'approved' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyApproved::class, 'archived' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyArchived::class, 'area' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea::class, 'auto_response' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse::class, 'billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput::class, 'civil_law_contracts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput::class, 'closed_for_applicants' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'code' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCode::class, 'contacts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput::class, 'created_at' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt::class, 'department' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment::class, 'description' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription::class, 'driver_license_types' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes::class, 'employment' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput::class, 'employment_form' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput::class, 'experience' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput::class, 'fly_in_fly_out_duration' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput::class, 'has_test' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyHasTest::class, 'id' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyId::class, 'initial_created_at' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyInitialCreatedAt::class, 'insider_interview' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview::class, 'internship' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship::class, 'key_skills' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyKeySkills::class, 'name' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyName::class, 'night_shifts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts::class, 'premium' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyPremium::class, 'professional_roles' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput::class, 'published_at' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt::class, 'relations' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyRelations::class, 'response_letter_required' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired::class, 'response_url' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl::class, 'salary' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'schedule' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput::class, 'show_contacts' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts::class, 'test' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest::class, 'type' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class, 'vacancy_properties' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyPublicationVacancyProperties::class, 'work_format' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput::class, 'work_schedule_by_days' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput::class, 'working_days' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput::class, 'working_hours' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput::class, 'working_time_intervals' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput::class, 'working_time_modes' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped Schema field accept_handicapped */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped $accept_handicapped;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes Schema field accept_incomplete_resumes */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes $accept_incomplete_resumes;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids Schema field accept_kids */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids $accept_kids;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null Schema field accept_labor_contract */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract $accept_labor_contract = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null Schema field accept_temporary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary $accept_temporary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAgeRestrictionOutput|null Schema field age_restriction */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAgeRestrictionOutput $age_restriction = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages Schema field allow_messages */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages $allow_messages;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAlternateUrl Schema field alternate_url */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyAlternateUrl $alternate_url;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyApplyAlternateUrl Schema field apply_alternate_url */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyApplyAlternateUrl $apply_alternate_url;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyApproved Schema field approved */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyApproved $approved;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyArchived Schema field archived */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyArchived $archived;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea Schema field area */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea $area;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null Schema field auto_response */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse $auto_response = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput Заменён на параметр [vacancy_properties](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list) */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput $billing_type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyBrandedDescription|null Schema field branded_description */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyBrandedDescription $branded_description = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput|null Schema field civil_law_contracts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput $civil_law_contracts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null Schema field closed_for_applicants */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCode|null Schema field code */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyCode $code = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput|null Schema field contacts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyContactsOutput $contacts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt Schema field created_at */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt $created_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment|null Schema field department */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsDepartment $department = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription Schema field description */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription $description;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes Schema field driver_license_types */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyEmployer|null Schema field employer */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyEmployer $employer = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput|null Schema field employment */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput $employment = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput|null Schema field employment_form */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput $employment_form = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput Schema field experience */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput $experience;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput|null Schema field fly_in_fly_out_duration */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput $fly_in_fly_out_duration = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyHasTest Schema field has_test */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyHasTest $has_test;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyId Schema field id */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyId $id;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyInitialCreatedAt Schema field initial_created_at */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyInitialCreatedAt $initial_created_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview|null Schema field insider_interview */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesObjectsInsiderInterview $insider_interview = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship|null Schema field internship */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship $internship = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyKeySkills Schema field key_skills */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyKeySkills $key_skills;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyLanguagesOutput|null Schema field languages */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyLanguagesOutput $languages = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyName Schema field name */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyName $name;

    /** @var string|null Ссылка для получения списка откликов/приглашений */
    public ?string $negotiations_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null Schema field night_shifts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts $night_shifts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyPremium Schema field premium */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyPremium $premium;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput Schema field professional_roles */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput $professional_roles;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt Schema field published_at */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyCreatedAt $published_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyRelations|null Schema field relations */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyRelations $relations = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired Schema field response_letter_required */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl|null Schema field response_url */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl $response_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary|null Schema field salary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySalary $salary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null Schema field salary_range */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput $salary_range = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput|null Schema field schedule */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput $schedule = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts|null Schema field show_contacts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyShowContacts $show_contacts = null;

    /** @var string|null Подходящие резюме на вакансию */
    public ?string $suitable_resumes_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest|null Schema field test */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest $test = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName Идентификатор типа вакансии из справочника [`vacancy_type`](https://api.hh.ru/openapi/redoc#tag/Obshie-spravochniki/operation/get-dictionaries). Значение open/close заменены на closed_for_applicants, а anonymous,direct - на vacancy_properties (HH_ANONYMOUS, HH_ADVERTISING) */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyConstructorTemplate|null Schema field vacancy_constructor_template */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyVacancyConstructorTemplate $vacancy_constructor_template = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyPublicationVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyPublicationVacancyProperties $vacancy_properties = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideoVacancyItem|null Schema field video_vacancy */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyVideoVacancyVideoVacancyItem $video_vacancy = null;

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
