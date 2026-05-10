<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy;

use and_y87\ClientsHh\Generated\Response\GetVacancyDraftResponse as BaseGetVacancyDraftResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/drafts/{draft_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-draft
 *
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptHandicapped $accept_handicapped Response field accept_handicapped
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptIncompleteResumes $accept_incomplete_resumes Response field accept_incomplete_resumes
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptKids $accept_kids Response field accept_kids
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptLaborContract|null $accept_labor_contract Response field accept_labor_contract
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyAcceptTemporary|null $accept_temporary Response field accept_temporary
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyAgeRestrictionOutput|null $age_restriction Response field age_restriction
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyAllowMessages $allow_messages Response field allow_messages
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null $auto_response Response field auto_response
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput $billing_type Заменён на параметр [vacancy_properties](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list)
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyCivilLawContractsCivilLawContractsOutput|null $civil_law_contracts Response field civil_law_contracts
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyCode|null $code Response field code
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDepartmentOutput|null $department Response field department
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDescription $description Response field description
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types Response field driver_license_types
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentOutput|null $employment Response field employment
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyEmploymentFormOutput|null $employment_form Response field employment_form
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyExperienceOutput $experience Response field experience
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyFlyInFlyOutDurationFlyInFlyOutDurationOutput|null $fly_in_fly_out_duration Response field fly_in_fly_out_duration
 * @property bool $has_test Информация о наличии прикрепленного тестового задании к вакансии
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyInternship|null $internship Response field internship
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyKeySkills $key_skills Response field key_skills
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyLanguagesOutput $languages Response field languages
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyManagerGet $manager Response field manager
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyName $name Response field name
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyNightShifts|null $night_shifts Response field night_shifts
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyProfessionalRolesOutput $professional_roles Response field professional_roles
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseLetterRequired $response_letter_required Response field response_letter_required
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseNotifications $response_notifications Response field response_notifications
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyResponseUrl|null $response_url Response field response_url
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancySalary|null $salary Response field salary
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancySalaryRangeSalaryRangeOutput|null $salary_range Response field salary_range
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyScheduleOutput|null $schedule Response field schedule
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftTest|null $test Response field test
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedTypeOutput $type Значение open/close заменены на closed_for_applicants, а anonymous,direct - на vacancy_properties (HH_ANONYMOUS, HH_ADVERTISING)
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkFormatWorkFormatOutput|null $work_format Response field work_format
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkScheduleByDaysWorkScheduleByDaysOutput|null $work_schedule_by_days Response field work_schedule_by_days
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingDaysOutput|null $working_days Response field working_days
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingHoursWorkingHoursOutput|null $working_hours Response field working_hours
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeIntervalsOutput|null $working_time_intervals Response field working_time_intervals
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyWorkingTimeModesOutput|null $working_time_modes Response field working_time_modes
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAddressOutput $address Response field address
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyAreaOutput> $areas Коды и названия регионов (фед. округа, субъекты федерации, города)
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManager|null $assigned_manager Response field assigned_manager
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyBrandedTemplate|null $branded_template Response field branded_template
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null $closed_for_applicants Response field closed_for_applicants
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftContactsWithFullPhone $contacts Response field contacts
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyCustomEmployerName|null $custom_employer_name Response field custom_employer_name
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftEmployer $employer Response field employer
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftBase $meta_info Response field meta_info
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyProperties|null $vacancy_properties Свойства вакансии, такие как тариф, анонимность и другие
 * @property \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftWithZp $with_zp Response field with_zp
 */
class GetDraftResponse extends BaseGetVacancyDraftResponse
{
}
