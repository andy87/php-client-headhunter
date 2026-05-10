<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancyManagement\Vacancy;

use and_y87\ClientsHh\Generated\Response\GetVacancyConditionsResponse as BaseGetVacancyConditionsResponse;

/**
 * Ответ HeadHunter API [GET] /vacancy_conditions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-conditions
 *
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $accept_handicapped Response field accept_handicapped
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $accept_incomplete_resumes Response field accept_incomplete_resumes
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $accept_kids Response field accept_kids
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $accept_labor_contract Response field accept_labor_contract
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $accept_temporary Response field accept_temporary
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $address Response field address
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $age_restriction Response field age_restriction
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $allow_messages Response field allow_messages
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $area Response field area
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $auto_response Response field auto_response
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $billing_type Response field billing_type
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $branded_template Response field branded_template
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $civil_law_contracts Response field civil_law_contracts
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $closed_for_applicants Станет обязательным полем, как только поля type и billing_type будут удалены
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $code Response field code
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $contacts Response field contacts
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $custom_employer_name Response field custom_employer_name
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $department Response field department
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $description Response field description
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $driver_license_types Response field driver_license_types
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $employment Response field employment
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $employment_form Response field employment_form
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $experience Response field experience
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $fly_in_fly_out_duration Response field fly_in_fly_out_duration
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $key_skills Response field key_skills
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $languages Response field languages
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $manager Response field manager
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $name Response field name
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $professional_roles Response field professional_roles
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $response_letter_required Response field response_letter_required
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $response_notifications Response field response_notifications
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $response_url Response field response_url
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $salary Response field salary
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $salary_range Response field salary_range
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $schedule Response field schedule
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $test Response field test
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $type Response field type
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $vacancy_properties Станет обязательным полем, как только поля type и billing_type будут удалены
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $work_format Response field work_format
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $work_schedule_by_days Response field work_schedule_by_days
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $working_days Response field working_days
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $working_hours Response field working_hours
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $working_time_intervals Response field working_time_intervals
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $working_time_modes Response field working_time_modes
 */
class GetConditionsResponse extends BaseGetVacancyConditionsResponse
{
}
