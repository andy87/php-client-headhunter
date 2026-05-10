<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy;

use Andy87\ClientsHh\Generated\Response\GetVacancyDraftResponse as BaseGetVacancyDraftResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/drafts/{draft_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-draft
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped $accept_handicapped Response field accept_handicapped
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes $accept_incomplete_resumes Response field accept_incomplete_resumes
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids $accept_kids Response field accept_kids
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null $accept_labor_contract Response field accept_labor_contract
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null $accept_temporary Response field accept_temporary
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAgeRestrictionOutput|null $age_restriction Response field age_restriction
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages $allow_messages Response field allow_messages
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null $auto_response Response field auto_response
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput $billing_type Заменён на параметр [vacancy_properties](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list)
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput|null $civil_law_contracts Response field civil_law_contracts
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyCode|null $code Response field code
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDepartmentOutput|null $department Response field department
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription $description Response field description
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types Response field driver_license_types
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput|null $employment Response field employment
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput|null $employment_form Response field employment_form
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput $experience Response field experience
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput|null $fly_in_fly_out_duration Response field fly_in_fly_out_duration
 * @property bool $has_test Информация о наличии прикрепленного тестового задании к вакансии
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyInternship|null $internship Response field internship
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyKeySkills $key_skills Response field key_skills
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyLanguagesOutput $languages Response field languages
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerGet $manager Response field manager
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyName $name Response field name
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null $night_shifts Response field night_shifts
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput $professional_roles Response field professional_roles
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required Response field response_letter_required
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications $response_notifications Response field response_notifications
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl|null $response_url Response field response_url
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancySalary|null $salary Response field salary
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null $salary_range Response field salary_range
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput|null $schedule Response field schedule
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftTest|null $test Response field test
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput $type Значение open/close заменены на closed_for_applicants, а anonymous,direct - на vacancy_properties (HH_ANONYMOUS, HH_ADVERTISING)
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput|null $work_format Response field work_format
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput|null $work_schedule_by_days Response field work_schedule_by_days
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput|null $working_days Response field working_days
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput|null $working_hours Response field working_hours
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput|null $working_time_intervals Response field working_time_intervals
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput|null $working_time_modes Response field working_time_modes
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAddressOutput $address Response field address
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyAreaOutput> $areas Коды и названия регионов (фед. округа, субъекты федерации, города)
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManager|null $assigned_manager Response field assigned_manager
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate|null $branded_template Response field branded_template
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null $closed_for_applicants Response field closed_for_applicants
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftContactsWithFullPhone $contacts Response field contacts
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName|null $custom_employer_name Response field custom_employer_name
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployer $employer Response field employer
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftBase $meta_info Response field meta_info
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyProperties|null $vacancy_properties Свойства вакансии, такие как тариф, анонимность и другие
 * @property \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp $with_zp Response field with_zp
 */
class GetDraftResponse extends BaseGetVacancyDraftResponse
{
}
