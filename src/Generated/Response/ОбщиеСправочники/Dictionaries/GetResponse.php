<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ОбщиеСправочники\Dictionaries;

use Andy87\ClientsHh\Generated\Response\GetDictionariesResponse as BaseGetDictionariesResponse;

/**
 * Ответ HeadHunter API [GET] /dictionaries.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-dictionaries
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $age_restriction Доступ к вакансии от 14 или 16 лет. Используется для поля age_restriction в вакансиях и черновиках
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $applicant_comment_access_type Тип доступа для комментария к соискателю
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $applicant_comments_order Типы сортировки [списка комментариев к соискателю](#tag/Kommentarii-k-soiskatelyu/operation/get-applicant-comments-list)
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $applicant_negotiation_status Статусы откликов/приглашений
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $business_trip_readiness Готовность к командировкам
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $civil_law_contracts Варианты договора гражданско-правового характера. Используется для поля civil_law_contracts в вакансиях и черновиках
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\DictionariesCurrencyItem> $currency Справочник валют
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesId> $driver_license_types Категории водительских прав
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $education_level Образование в резюме
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $employer_active_vacancies_order Тип сортировки списка опубликованных вакансий
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $employer_archived_vacancies_order Тип сортировки списка архивных вакансий
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $employer_hidden_vacancies_order Тип сортировки скрытых вакансий
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $employer_relation Типы связи компании с пользователем
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $employer_type Тип работодателя
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $employment Тип занятости
 * @property array<int, array<string, mixed>>|null $employment_form Тип занятости. Используется для поля employment_form в вакансиях и черновиках
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $experience Опыт работы
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $fly_in_fly_out_duration Длительность вахты. Используется для поля fly_in_fly_out_duration в вакансиях и черновиках
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $gender Пол
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $job_search_statuses_applicant Статусы поиска соискателей для установки и отображения самому соискателю
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $job_search_statuses_employer Статусы поиска соискателей для отображения работодателям
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $language_level Уровень владения языком
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $linked_socials Соцсеть для привязки в качестве способа входа
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $messaging_status Статус возможности отправки сообщения в переписке
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $negotiations_order Типы порядка отображения откликов
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $negotiations_participant_type Типы участников переписки
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $negotiations_state Типы состояний откликов
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $phone_call_status Статус звонка, зафиксированного в системе кол-трекинг
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $preferred_contact_type Предпочитаемый способ связи
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $relocation_type Готовность к переезду
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $resume_access_type Уровень доступа к резюме
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $resume_contacts_site_type Тип сайта в поле «контакты»
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $resume_employment_form Тип занятости. Используется для поля employment_form в резюме
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $resume_hidden_fields Поля резюме, которые могут быть скрыты
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $resume_moderation_note Комментарий модератора
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $resume_search_experience_period Условие поиска по опыту работы
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $resume_search_fields Область поиска в резюме
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $resume_search_label Метки поиска резюме
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $resume_search_logic Условие поиска резюме
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $resume_search_order Тип сортировки резюме
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $resume_search_relocation Условие поиска по проживанию в регионе и готовности к переезду
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $resume_status Статус резюме
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $resume_work_format Формат работы. Используется для поля work_format в резюме
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $salary_range_frequency Частота выплаты зарплаты. Используется для поля frequency внутри salary_range
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $salary_range_mode Тип грануляции зарплаты. Используется для поля mode внутри salary_range
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameUid> $schedule График работы
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $travel_time Время в пути
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $vacancy_billing_type Варианты размещения вакансии с точки зрения биллинга
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $vacancy_cluster Тип кластеров
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $vacancy_label Метки вакансии
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $vacancy_not_prolonged_reason Причины, из-за которых невозможно [продлить вакансию](#tag/Upravlenie-vakansiyami/operation/get-prolongation-vacancy-info)
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $vacancy_relation Типы связи вакансии с пользователем
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $vacancy_search_employment_form Тип занятости. Используется в параметре employment_form в поиске вакансий
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $vacancy_search_fields Область поиска в вакансии
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $vacancy_search_order Тип сортировки вакансии
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $vacancy_type Тип вакансии
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $work_format Формат работы. Используется для поля work_format в вакансиях и черновиках
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $work_schedule_by_days Расписание на неделю. Используется для поля work_schedule_by_days в вакансиях и черновиках
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $working_days Рабочие дни
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null $working_hours Рабочие часы в сутки. Используется для поля working_hours в вакансиях и черновиках
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $working_time_intervals Временные интервалы работы
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> $working_time_modes Режимы времени работы
 */
class GetResponse extends BaseGetDictionariesResponse
{
}
