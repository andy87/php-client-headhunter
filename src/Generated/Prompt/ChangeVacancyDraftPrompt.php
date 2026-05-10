<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /vacancies/drafts/{draft_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/change-vacancy-draft
 */
class ChangeVacancyDraftPrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/vacancies/drafts/{draft_id}';

    protected const CONTENT_TYPE = 'application/json';

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['draft_id' => 'draft_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'accept_handicapped' => 'accept_handicapped', 'accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_kids' => 'accept_kids', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'address' => 'address', 'age_restriction' => 'age_restriction', 'allow_messages' => 'allow_messages', 'area' => 'area', 'areas' => 'areas', 'assigned_manager_id' => 'assigned_manager_id', 'auto_response' => 'auto_response', 'branded_template' => 'branded_template', 'civil_law_contracts' => 'civil_law_contracts', 'code' => 'code', 'contacts' => 'contacts', 'custom_employer_name' => 'custom_employer_name', 'department' => 'department', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'internship' => 'internship', 'key_skills' => 'key_skills', 'languages' => 'languages', 'name' => 'name', 'night_shifts' => 'night_shifts', 'professional_roles' => 'professional_roles', 'response_letter_required' => 'response_letter_required', 'response_notifications' => 'response_notifications', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'scheduled_at' => 'scheduled_at', 'test' => 'test', 'with_zp' => 'with_zp', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes'];

    protected const REQUIRED_FIELDS = ['draft_id'];

    protected const NULLABLE_FIELDS = ['scheduled_at'];

    protected const CASTS = ['assigned_manager_id' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManagerId::class, 'auto_response' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse::class];

    protected const PATH_FIELDS = ['draft_id'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = ['accept_handicapped', 'accept_incomplete_resumes', 'accept_kids', 'accept_labor_contract', 'accept_temporary', 'address', 'age_restriction', 'allow_messages', 'area', 'areas', 'assigned_manager_id', 'auto_response', 'branded_template', 'civil_law_contracts', 'code', 'contacts', 'custom_employer_name', 'department', 'description', 'driver_license_types', 'employment', 'employment_form', 'experience', 'fly_in_fly_out_duration', 'internship', 'key_skills', 'languages', 'name', 'night_shifts', 'professional_roles', 'response_letter_required', 'response_notifications', 'response_url', 'salary', 'salary_range', 'schedule', 'scheduled_at', 'test', 'with_zp', 'work_format', 'work_schedule_by_days', 'working_days', 'working_hours', 'working_time_intervals', 'working_time_modes'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор черновика */
    public string $draft_id;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped|null Body field accept_handicapped */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped $accept_handicapped = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes|null Body field accept_incomplete_resumes */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes $accept_incomplete_resumes = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids|null Body field accept_kids */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids $accept_kids = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null Body field accept_labor_contract */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract $accept_labor_contract = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null Body field accept_temporary */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary $accept_temporary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAddress|null Body field address */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAddress $address = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAgeRestriction|null Публикация вакансий для соискателей от 14 и 16 лет допустима только на территории Российской Федерации.
Права публиковать вакансии с пометкой для соискателей от 14 и 16 лет есть у подтвержденных Российских работодателей.
Для получения права для иностранной компании обратитесь к персональному менеджеру.

После получения права, появится возможность публиковать новые вакансии с данным параметром, либо обновлять имеющиеся вакансии
 */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAgeRestriction $age_restriction = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages|null Body field allow_messages */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages $allow_messages = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyArea|null Body field area */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyArea $area = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAreas|null Можно передать не более 50 элементов */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAreas $areas = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManagerId|null Body field assigned_manager_id */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManagerId $assigned_manager_id = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null Body field auto_response */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse $auto_response = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftBrandedTemplate|null Body field branded_template */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftBrandedTemplate $branded_template = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContracts|null Body field civil_law_contracts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContracts $civil_law_contracts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftCode|null Body field code */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftCode $code = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftContacts|null Body field contacts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftContacts $contacts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName|null Body field custom_employer_name */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName $custom_employer_name = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDepartment|null Body field department */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDepartment $department = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDescription|null Body field description */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftDescription $description = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes|null Body field driver_license_types */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployment|null Body field employment */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployment $employment = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentForm|null Body field employment_form */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentForm $employment_form = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyExperience|null Body field experience */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyExperience $experience = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDuration|null Список вариантов длительности вахты (в ближайшие полгода станет обязательным полем!) */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDuration $fly_in_fly_out_duration = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship|null Body field internship */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship $internship = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftKeySkills|null Body field key_skills */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftKeySkills $key_skills = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyLanguages|null Body field languages */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyLanguages $languages = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftName|null Body field name */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftName $name = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null Body field night_shifts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts $night_shifts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftProfessionalRoles|null Body field professional_roles */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftProfessionalRoles $professional_roles = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired|null Body field response_letter_required */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications|null Body field response_notifications */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications $response_notifications = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftResponseUrl|null Body field response_url */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftResponseUrl $response_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary|null Body field salary */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalary $salary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRange|null Body field salary_range */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRange $salary_range = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySchedule|null Body field schedule */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySchedule $schedule = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftScheduledAt|null Body field scheduled_at */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftScheduledAt $scheduled_at = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftTest|null Body field test */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftTest $test = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp|null Body field with_zp */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp $with_zp = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormat|null Body field work_format */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormat $work_format = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDays|null Body field work_schedule_by_days */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDays $work_schedule_by_days = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingDays|null Body field working_days */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingDays $working_days = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHours|null Body field working_hours */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHours $working_hours = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervals|null Body field working_time_intervals */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervals $working_time_intervals = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModes|null Body field working_time_modes */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModes $working_time_modes = null;
}
