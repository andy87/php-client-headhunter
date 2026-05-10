<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /vacancies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/publish-vacancy
 */
class PublishVacancyPrompt extends PrivatePrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/vacancies';

    protected const CONTENT_TYPE = 'application/json';

    protected const QUERY_PARAMETER_STYLES = ['ignore_duplicates' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['ignore_duplicates' => 'ignore_duplicates', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'accept_handicapped' => 'accept_handicapped', 'accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_kids' => 'accept_kids', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'address' => 'address', 'age_restriction' => 'age_restriction', 'allow_messages' => 'allow_messages', 'auto_response' => 'auto_response', 'branded_template' => 'branded_template', 'civil_law_contracts' => 'civil_law_contracts', 'code' => 'code', 'contacts' => 'contacts', 'custom_employer_name' => 'custom_employer_name', 'department' => 'department', 'driver_license_types' => 'driver_license_types', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'internship' => 'internship', 'key_skills' => 'key_skills', 'languages' => 'languages', 'night_shifts' => 'night_shifts', 'professional_roles' => 'professional_roles', 'response_letter_required' => 'response_letter_required', 'response_notifications' => 'response_notifications', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'show_contacts' => 'show_contacts', 'test' => 'test', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['accept_handicapped', 'accept_incomplete_resumes', 'accept_kids', 'allow_messages', 'response_letter_required', 'response_notifications', 'salary_range'];

    protected const CASTS = ['accept_labor_contract' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract::class, 'accept_temporary' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary::class, 'address' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAddress::class, 'age_restriction' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAgeRestriction::class, 'auto_response' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse::class, 'branded_template' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate::class, 'civil_law_contracts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContracts::class, 'code' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCode::class, 'contacts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyContacts::class, 'custom_employer_name' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName::class, 'department' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDepartment::class, 'employment' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmployment::class, 'employment_form' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentForm::class, 'experience' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyExperience::class, 'fly_in_fly_out_duration' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDuration::class, 'internship' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship::class, 'night_shifts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts::class, 'professional_roles' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRoles::class, 'response_url' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl::class, 'salary' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary::class, 'schedule' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySchedule::class, 'show_contacts' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts::class, 'test' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftTest::class, 'work_format' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormat::class, 'work_schedule_by_days' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDays::class, 'working_days' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingDays::class, 'working_hours' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHours::class, 'working_time_intervals' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervals::class, 'working_time_modes' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModes::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['ignore_duplicates', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = ['accept_handicapped', 'accept_incomplete_resumes', 'accept_kids', 'accept_labor_contract', 'accept_temporary', 'address', 'age_restriction', 'allow_messages', 'auto_response', 'branded_template', 'civil_law_contracts', 'code', 'contacts', 'custom_employer_name', 'department', 'driver_license_types', 'employment', 'employment_form', 'experience', 'fly_in_fly_out_duration', 'internship', 'key_skills', 'languages', 'night_shifts', 'professional_roles', 'response_letter_required', 'response_notifications', 'response_url', 'salary', 'salary_range', 'schedule', 'show_contacts', 'test', 'work_format', 'work_schedule_by_days', 'working_days', 'working_hours', 'working_time_intervals', 'working_time_modes'];

    protected const BODY_ROOT_FIELD = null;

    /** @var bool|null Форсирование добавления дубликатов */
    public ?bool $ignore_duplicates = null;

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

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAddress|null Body field address */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAddress $address = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAgeRestriction|null Публикация вакансий для соискателей от 14 и 16 лет допустима только на территории Российской Федерации.
Права публиковать вакансии с пометкой для соискателей от 14 и 16 лет есть у подтвержденных Российских работодателей.
Для получения права для иностранной компании обратитесь к персональному менеджеру.

После получения права, появится возможность публиковать новые вакансии с данным параметром, либо обновлять имеющиеся вакансии
 */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAgeRestriction $age_restriction = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages|null Body field allow_messages */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages $allow_messages = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null Body field auto_response */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse $auto_response = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate|null Body field branded_template */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate $branded_template = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContracts|null Body field civil_law_contracts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContracts $civil_law_contracts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCode|null Body field code */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCode $code = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyContacts|null Body field contacts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyContacts $contacts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName|null Body field custom_employer_name */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName $custom_employer_name = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDepartment|null Body field department */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDepartment $department = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes|null Body field driver_license_types */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmployment|null Body field employment */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyEmployment $employment = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentForm|null Body field employment_form */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentForm $employment_form = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyExperience|null Body field experience */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyExperience $experience = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDuration|null Body field fly_in_fly_out_duration */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDuration $fly_in_fly_out_duration = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship|null Body field internship */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship $internship = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyKeySkills|null Body field key_skills */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyKeySkills $key_skills = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyLanguages|null Body field languages */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyLanguages $languages = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null Body field night_shifts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts $night_shifts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRoles|null Body field professional_roles */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRoles $professional_roles = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired|null Body field response_letter_required */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications|null Body field response_notifications */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications $response_notifications = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl|null Body field response_url */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl $response_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary|null Body field salary */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalary $salary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRange|null Body field salary_range */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRange $salary_range = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySchedule|null Body field schedule */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancySchedule $schedule = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts|null Body field show_contacts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyShowContacts $show_contacts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftTest|null Body field test */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftTest $test = null;

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
