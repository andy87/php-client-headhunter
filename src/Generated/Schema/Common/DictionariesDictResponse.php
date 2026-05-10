<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesDictResponse.
 */
class DictionariesDictResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['age_restriction' => 'age_restriction', 'applicant_comment_access_type' => 'applicant_comment_access_type', 'applicant_comments_order' => 'applicant_comments_order', 'applicant_negotiation_status' => 'applicant_negotiation_status', 'business_trip_readiness' => 'business_trip_readiness', 'civil_law_contracts' => 'civil_law_contracts', 'currency' => 'currency', 'driver_license_types' => 'driver_license_types', 'education_level' => 'education_level', 'employer_active_vacancies_order' => 'employer_active_vacancies_order', 'employer_archived_vacancies_order' => 'employer_archived_vacancies_order', 'employer_hidden_vacancies_order' => 'employer_hidden_vacancies_order', 'employer_relation' => 'employer_relation', 'employer_type' => 'employer_type', 'employment' => 'employment', 'employment_form' => 'employment_form', 'experience' => 'experience', 'fly_in_fly_out_duration' => 'fly_in_fly_out_duration', 'gender' => 'gender', 'job_search_statuses_applicant' => 'job_search_statuses_applicant', 'job_search_statuses_employer' => 'job_search_statuses_employer', 'language_level' => 'language_level', 'linked_socials' => 'linked_socials', 'messaging_status' => 'messaging_status', 'negotiations_order' => 'negotiations_order', 'negotiations_participant_type' => 'negotiations_participant_type', 'negotiations_state' => 'negotiations_state', 'phone_call_status' => 'phone_call_status', 'preferred_contact_type' => 'preferred_contact_type', 'relocation_type' => 'relocation_type', 'resume_access_type' => 'resume_access_type', 'resume_contacts_site_type' => 'resume_contacts_site_type', 'resume_employment_form' => 'resume_employment_form', 'resume_hidden_fields' => 'resume_hidden_fields', 'resume_moderation_note' => 'resume_moderation_note', 'resume_search_experience_period' => 'resume_search_experience_period', 'resume_search_fields' => 'resume_search_fields', 'resume_search_label' => 'resume_search_label', 'resume_search_logic' => 'resume_search_logic', 'resume_search_order' => 'resume_search_order', 'resume_search_relocation' => 'resume_search_relocation', 'resume_status' => 'resume_status', 'resume_work_format' => 'resume_work_format', 'salary_range_frequency' => 'salary_range_frequency', 'salary_range_mode' => 'salary_range_mode', 'schedule' => 'schedule', 'travel_time' => 'travel_time', 'vacancy_billing_type' => 'vacancy_billing_type', 'vacancy_cluster' => 'vacancy_cluster', 'vacancy_label' => 'vacancy_label', 'vacancy_not_prolonged_reason' => 'vacancy_not_prolonged_reason', 'vacancy_relation' => 'vacancy_relation', 'vacancy_search_employment_form' => 'vacancy_search_employment_form', 'vacancy_search_fields' => 'vacancy_search_fields', 'vacancy_search_order' => 'vacancy_search_order', 'vacancy_type' => 'vacancy_type', 'work_format' => 'work_format', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_days' => 'working_days', 'working_hours' => 'working_hours', 'working_time_intervals' => 'working_time_intervals', 'working_time_modes' => 'working_time_modes'];

    protected const REQUIRED_FIELDS = ['education_level', 'gender', 'language_level', 'preferred_contact_type', 'relocation_type', 'travel_time', 'resume_access_type', 'business_trip_readiness', 'resume_contacts_site_type', 'resume_status', 'resume_moderation_note', 'driver_license_types', 'resume_hidden_fields', 'employment', 'experience', 'schedule', 'vacancy_type', 'vacancy_label', 'vacancy_relation', 'vacancy_billing_type', 'working_days', 'working_time_intervals', 'working_time_modes', 'vacancy_search_employment_form', 'vacancy_search_fields', 'vacancy_search_order', 'vacancy_cluster', 'employer_active_vacancies_order', 'employer_archived_vacancies_order', 'negotiations_order', 'negotiations_state', 'messaging_status', 'negotiations_participant_type', 'applicant_negotiation_status', 'currency', 'employer_type', 'employer_relation', 'vacancy_not_prolonged_reason', 'applicant_comments_order', 'applicant_comment_access_type', 'phone_call_status', 'job_search_statuses_applicant', 'job_search_statuses_employer', 'resume_employment_form', 'resume_work_format'];

    protected const NULLABLE_FIELDS = ['salary_range_frequency', 'salary_range_mode'];

    protected const CASTS = ['age_restriction' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'applicant_comment_access_type' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'applicant_comments_order' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'applicant_negotiation_status' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'business_trip_readiness' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'civil_law_contracts' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'currency' => [\Andy87\ClientsHh\Generated\Schema\Common\DictionariesCurrencyItem::class], 'driver_license_types' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesId::class], 'education_level' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'employer_active_vacancies_order' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'employer_archived_vacancies_order' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'employer_hidden_vacancies_order' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'employer_relation' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'employer_type' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'employment' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'experience' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'fly_in_fly_out_duration' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'gender' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'job_search_statuses_applicant' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'job_search_statuses_employer' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'language_level' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'linked_socials' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'messaging_status' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'negotiations_order' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'negotiations_participant_type' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'negotiations_state' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'phone_call_status' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'preferred_contact_type' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'relocation_type' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_access_type' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_contacts_site_type' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_employment_form' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_hidden_fields' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_moderation_note' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_search_experience_period' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_search_fields' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_search_label' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_search_logic' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_search_order' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_search_relocation' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_status' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'resume_work_format' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'salary_range_frequency' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'salary_range_mode' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'schedule' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameUid::class], 'travel_time' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'vacancy_billing_type' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'vacancy_cluster' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'vacancy_label' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'vacancy_not_prolonged_reason' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'vacancy_relation' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'vacancy_search_employment_form' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'vacancy_search_fields' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'vacancy_search_order' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'vacancy_type' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'work_format' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'work_schedule_by_days' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'working_days' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'working_hours' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'working_time_intervals' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'working_time_modes' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Доступ к вакансии от 14 или 16 лет. Используется для поля age_restriction в вакансиях и черновиках */
    public ?array $age_restriction = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип доступа для комментария к соискателю */
    public array $applicant_comment_access_type;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Типы сортировки [списка комментариев к соискателю](#tag/Kommentarii-k-soiskatelyu/operation/get-applicant-comments-list) */
    public array $applicant_comments_order;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Статусы откликов/приглашений */
    public array $applicant_negotiation_status;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Готовность к командировкам */
    public array $business_trip_readiness;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Варианты договора гражданско-правового характера. Используется для поля civil_law_contracts в вакансиях и черновиках */
    public ?array $civil_law_contracts = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\DictionariesCurrencyItem> Справочник валют */
    public array $currency;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesId> Категории водительских прав */
    public array $driver_license_types;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Образование в резюме */
    public array $education_level;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип сортировки списка опубликованных вакансий */
    public array $employer_active_vacancies_order;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип сортировки списка архивных вакансий */
    public array $employer_archived_vacancies_order;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Тип сортировки скрытых вакансий */
    public ?array $employer_hidden_vacancies_order = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Типы связи компании с пользователем */
    public array $employer_relation;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип работодателя */
    public array $employer_type;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип занятости */
    public array $employment;

    /** @var array<int, array<string, mixed>>|null Тип занятости. Используется для поля employment_form в вакансиях и черновиках */
    public ?array $employment_form = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Опыт работы */
    public array $experience;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Длительность вахты. Используется для поля fly_in_fly_out_duration в вакансиях и черновиках */
    public ?array $fly_in_fly_out_duration = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Пол */
    public array $gender;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Статусы поиска соискателей для установки и отображения самому соискателю */
    public array $job_search_statuses_applicant;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Статусы поиска соискателей для отображения работодателям */
    public array $job_search_statuses_employer;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Уровень владения языком */
    public array $language_level;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Соцсеть для привязки в качестве способа входа */
    public ?array $linked_socials = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Статус возможности отправки сообщения в переписке */
    public array $messaging_status;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Типы порядка отображения откликов */
    public array $negotiations_order;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Типы участников переписки */
    public array $negotiations_participant_type;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Типы состояний откликов */
    public array $negotiations_state;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Статус звонка, зафиксированного в системе кол-трекинг */
    public array $phone_call_status;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Предпочитаемый способ связи */
    public array $preferred_contact_type;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Готовность к переезду */
    public array $relocation_type;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Уровень доступа к резюме */
    public array $resume_access_type;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип сайта в поле «контакты» */
    public array $resume_contacts_site_type;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип занятости. Используется для поля employment_form в резюме */
    public array $resume_employment_form;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Поля резюме, которые могут быть скрыты */
    public array $resume_hidden_fields;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Комментарий модератора */
    public array $resume_moderation_note;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Условие поиска по опыту работы */
    public ?array $resume_search_experience_period = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Область поиска в резюме */
    public ?array $resume_search_fields = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Метки поиска резюме */
    public ?array $resume_search_label = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Условие поиска резюме */
    public ?array $resume_search_logic = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Тип сортировки резюме */
    public ?array $resume_search_order = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Условие поиска по проживанию в регионе и готовности к переезду */
    public ?array $resume_search_relocation = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Статус резюме */
    public array $resume_status;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Формат работы. Используется для поля work_format в резюме */
    public array $resume_work_format;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Частота выплаты зарплаты. Используется для поля frequency внутри salary_range */
    public ?array $salary_range_frequency = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Тип грануляции зарплаты. Используется для поля mode внутри salary_range */
    public ?array $salary_range_mode = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameUid> График работы */
    public array $schedule;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Время в пути */
    public array $travel_time;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Варианты размещения вакансии с точки зрения биллинга */
    public array $vacancy_billing_type;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип кластеров */
    public array $vacancy_cluster;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Метки вакансии */
    public array $vacancy_label;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Причины, из-за которых невозможно [продлить вакансию](#tag/Upravlenie-vakansiyami/operation/get-prolongation-vacancy-info) */
    public array $vacancy_not_prolonged_reason;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Типы связи вакансии с пользователем */
    public array $vacancy_relation;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип занятости. Используется в параметре employment_form в поиске вакансий */
    public array $vacancy_search_employment_form;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Область поиска в вакансии */
    public array $vacancy_search_fields;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип сортировки вакансии */
    public array $vacancy_search_order;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Тип вакансии */
    public array $vacancy_type;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Формат работы. Используется для поля work_format в вакансиях и черновиках */
    public ?array $work_format = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Расписание на неделю. Используется для поля work_schedule_by_days в вакансиях и черновиках */
    public ?array $work_schedule_by_days = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Рабочие дни */
    public array $working_days;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Рабочие часы в сутки. Используется для поля working_hours в вакансиях и черновиках */
    public ?array $working_hours = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Временные интервалы работы */
    public array $working_time_intervals;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Режимы времени работы */
    public array $working_time_modes;
}
