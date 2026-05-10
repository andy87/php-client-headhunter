<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditions.
 */
class VacanciesVacancyConditions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accept_handicapped' => 'accept_handicapped', 'accept_incomplete_resumes' => 'accept_incomplete_resumes', 'accept_kids' => 'accept_kids', 'accept_labor_contract' => 'accept_labor_contract', 'accept_temporary' => 'accept_temporary', 'address' => 'address', 'age_restriction' => 'age_restriction', 'allow_messages' => 'allow_messages', 'area' => 'area', 'auto_response' => 'auto_response', 'billing_type' => 'billing_type', 'branded_template' => 'branded_template', 'civil_law_contracts' => 'civil_law_contracts', 'closed_for_applicants' => 'closed_for_applicants', 'code' => 'code', 'contacts' => 'contacts', 'custom_employer_name' => 'custom_employer_name', 'department' => 'department', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'key_skills' => 'key_skills', 'languages' => 'languages', 'manager' => 'manager', 'name' => 'name', 'professional_roles' => 'professional_roles', 'response_letter_required' => 'response_letter_required', 'response_notifications' => 'response_notifications', 'response_url' => 'response_url', 'salary' => 'salary', 'salary_range' => 'salary_range', 'schedule' => 'schedule', 'test' => 'test', 'type' => 'type', 'vacancy_properties' => 'vacancy_properties', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['accept_handicapped', 'accept_incomplete_resumes', 'accept_kids', 'accept_labor_contract', 'accept_temporary', 'address', 'age_restriction', 'allow_messages', 'area', 'auto_response', 'billing_type', 'branded_template', 'civil_law_contracts', 'closed_for_applicants', 'code', 'contacts', 'custom_employer_name', 'department', 'description', 'driver_license_types', 'employment', 'employment_form', 'experience', 'fly_in_fly_out_duration', 'key_skills', 'languages', 'manager', 'name', 'professional_roles', 'response_letter_required', 'response_notifications', 'response_url', 'salary', 'salary_range', 'schedule', 'test', 'type', 'vacancy_properties', 'work_format', 'work_schedule_by_days', 'working_days', 'working_hours', 'working_time_intervals', 'working_time_modes'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field accept_handicapped */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_handicapped = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field accept_incomplete_resumes */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_incomplete_resumes = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field accept_kids */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_kids = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field accept_labor_contract */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_labor_contract = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field accept_temporary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $accept_temporary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field address */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $address = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field age_restriction */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $age_restriction = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field allow_messages */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $allow_messages = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field area */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $area = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field auto_response */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $auto_response = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field billing_type */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $billing_type = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field branded_template */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $branded_template = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field civil_law_contracts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $civil_law_contracts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Станет обязательным полем, как только поля type и billing_type будут удалены */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $closed_for_applicants = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field code */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $code = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field contacts */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $contacts = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field custom_employer_name */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $custom_employer_name = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field department */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $department = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field description */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $description = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field driver_license_types */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $driver_license_types = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field employment */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $employment = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field employment_form */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $employment_form = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field experience */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $experience = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field fly_in_fly_out_duration */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $fly_in_fly_out_duration = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field key_skills */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $key_skills = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field languages */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $languages = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field manager */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $manager = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field name */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $name = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field professional_roles */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $professional_roles = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field response_letter_required */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $response_letter_required = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field response_notifications */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $response_notifications = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field response_url */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $response_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field salary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $salary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field salary_range */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $salary_range = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field schedule */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $schedule = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field test */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $test = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field type */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $type = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Станет обязательным полем, как только поля type и billing_type будут удалены */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $vacancy_properties = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field work_format */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $work_format = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field work_schedule_by_days */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $work_schedule_by_days = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field working_days */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $working_days = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field working_hours */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $working_hours = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field working_time_intervals */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $working_time_intervals = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field working_time_modes */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $working_time_modes = null;
}
