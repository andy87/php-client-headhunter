<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\VacancyDrafts\Vacancy;

use Andy87\ClientsHh\Generated\Prompt\CreateVacancyDraftPrompt as BaseCreateVacancyDraftPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /vacancies/drafts.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/create-vacancy-draft
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped|null $accept_handicapped Body field accept_handicapped
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes|null $accept_incomplete_resumes Body field accept_incomplete_resumes
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids|null $accept_kids Body field accept_kids
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null $accept_labor_contract Body field accept_labor_contract
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null $accept_temporary Body field accept_temporary
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAddress|null $address Body field address
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAgeRestriction|null $age_restriction Публикация вакансий для соискателей от 14 и 16 лет допустима только на территории Российской Федерации. Права публиковать вакансии с пометкой для соискателей от 14 и 16 лет есть у подтвержденных Российских работодателей. Для получения права для иностранной компании обратитесь к персональному менеджеру. После получения права, появится возможность публиковать новые вакансии с данным параметром, либо обновлять имеющиеся вакансии
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages|null $allow_messages Body field allow_messages
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyArea|null $area Body field area
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAreas|null $areas Можно передать не более 50 элементов
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManagerId|null $assigned_manager_id Body field assigned_manager_id
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null $auto_response Body field auto_response
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftBrandedTemplate|null $branded_template Body field branded_template
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContracts|null $civil_law_contracts Body field civil_law_contracts
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftCode|null $code Body field code
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftContacts|null $contacts Body field contacts
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName|null $custom_employer_name Body field custom_employer_name
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDepartment|null $department Body field department
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftDescription|null $description Body field description
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes|null $driver_license_types Body field driver_license_types
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployment|null $employment Body field employment
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentForm|null $employment_form Body field employment_form
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperience|null $experience Body field experience
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDuration|null $fly_in_fly_out_duration Список вариантов длительности вахты (в ближайшие полгода станет обязательным полем!)
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship|null $internship Body field internship
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftKeySkills|null $key_skills Body field key_skills
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyLanguages|null $languages Body field languages
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftName|null $name Body field name
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null $night_shifts Body field night_shifts
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftProfessionalRoles|null $professional_roles Body field professional_roles
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired|null $response_letter_required Body field response_letter_required
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications|null $response_notifications Body field response_notifications
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftResponseUrl|null $response_url Body field response_url
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary|null $salary Body field salary
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRange|null $salary_range Body field salary_range
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancySchedule|null $schedule Body field schedule
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftScheduledAt|null $scheduled_at Body field scheduled_at
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest|null $test Body field test
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp|null $with_zp Body field with_zp
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormat|null $work_format Body field work_format
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDays|null $work_schedule_by_days Body field work_schedule_by_days
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDays|null $working_days Body field working_days
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHours|null $working_hours Body field working_hours
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervals|null $working_time_intervals Body field working_time_intervals
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModes|null $working_time_modes Body field working_time_modes
 */
class CreateDraftPrompt extends BaseCreateVacancyDraftPrompt
{
}
