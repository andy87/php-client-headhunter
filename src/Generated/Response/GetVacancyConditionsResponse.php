<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /vacancy_conditions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-conditions
 */
class GetVacancyConditionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['accept_handicapped' => 'accept_handicapped', 'accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_kids' => 'accept_kids', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'address' => 'address', 'age_restriction' => 'age_restriction', 'allow_messages' => 'allow_messages', 'area' => 'area', 'auto_response' => 'auto_response', 'billing_type' => 'billing_type', 'branded_template' => 'branded_template', 'civil_law_contracts' => 'civil_law_contracts', 'closed_for_applicants' => 'closed_for_applicants', 'code' => 'code', 'contacts' => 'contacts', 'custom_employer_name' => 'custom_employer_name', 'department' => 'department', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'key_skills' => 'key_skills', 'languages' => 'languages', 'manager' => 'manager', 'name' => 'name', 'professional_roles' => 'professional_roles', 'response_letter_required' => 'response_letter_required', 'response_notifications' => 'response_notifications', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'test' => 'test', 'type' => 'type', 'vacancy_properties' => 'vacancy_properties', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['accept_handicapped', 'accept_incomplete_resumes', 'accept_kids', 'accept_labor_contract', 'accept_temporary', 'address', 'age_restriction', 'allow_messages', 'area', 'auto_response', 'billing_type', 'branded_template', 'civil_law_contracts', 'closed_for_applicants', 'code', 'contacts', 'custom_employer_name', 'department', 'description', 'driver_license_types', 'employment', 'employment_form', 'experience', 'fly_in_fly_out_duration', 'key_skills', 'languages', 'manager', 'name', 'professional_roles', 'response_letter_required', 'response_notifications', 'response_url', 'salary', 'salary_range', 'schedule', 'test', 'type', 'vacancy_properties', 'work_format', 'work_schedule_by_days', 'working_days', 'working_hours', 'working_time_intervals', 'working_time_modes'];

    protected const CASTS = [];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyConditions::class;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field accept_handicapped */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_handicapped = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field accept_incomplete_resumes */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_incomplete_resumes = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field accept_kids */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_kids = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field accept_labor_contract */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_labor_contract = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field accept_temporary */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_temporary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field address */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $address = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field age_restriction */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $age_restriction = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field allow_messages */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $allow_messages = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field area */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $area = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field auto_response */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $auto_response = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field billing_type */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $billing_type = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field branded_template */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $branded_template = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field civil_law_contracts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $civil_law_contracts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Станет обязательным полем, как только поля type и billing_type будут удалены */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $closed_for_applicants = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field code */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $code = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field contacts */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $contacts = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field custom_employer_name */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $custom_employer_name = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field department */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $department = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field description */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $description = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field driver_license_types */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $driver_license_types = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field employment */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $employment = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field employment_form */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $employment_form = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field experience */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $experience = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field fly_in_fly_out_duration */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $fly_in_fly_out_duration = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field key_skills */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $key_skills = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field languages */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $languages = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field manager */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $manager = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field name */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $name = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field professional_roles */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $professional_roles = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field response_letter_required */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $response_letter_required = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field response_notifications */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $response_notifications = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field response_url */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $response_url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field salary */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $salary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field salary_range */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $salary_range = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field schedule */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $schedule = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field test */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $test = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field type */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $type = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Станет обязательным полем, как только поля type и billing_type будут удалены */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $vacancy_properties = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field work_format */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $work_format = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field work_schedule_by_days */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $work_schedule_by_days = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field working_days */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $working_days = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field working_hours */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $working_hours = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field working_time_intervals */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $working_time_intervals = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Response field working_time_modes */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $working_time_modes = null;
}
