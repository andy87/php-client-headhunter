<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeResumeForEmployer.
 */
class ResumeResumeForEmployer extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alternate_url' => 'alternate_url', 'id' => 'id', 'title' => 'title', 'employment_form' => 'employment_form', 'work_format' => 'work_format', 'age' => 'age', 'area' => 'area', 'can_view_full_info' => 'can_view_full_info', 'certificate' => 'certificate', 'citizenship' => 'citizenship', 'contact_view_status' => 'contact_view_status', 'created_at' => 'created_at', 'download' => 'download', 'education' => 'education', 'experience_group_by_company' => 'experience_group_by_company', 'first_name' => 'first_name', 'gender' => 'gender', 'hidden_fields' => 'hidden_fields', 'last_name' => 'last_name', 'marked' => 'marked', 'middle_name' => 'middle_name', 'platform' => 'platform', 'real_id' => 'real_id', 'salary' => 'salary', 'total_experience' => 'total_experience', 'updated_at' => 'updated_at', 'experience' => 'experience', 'birth_date' => 'birth_date', 'business_trip_readiness' => 'business_trip_readiness', 'contact' => 'contact', 'creds' => 'creds', 'driver_license_types' => 'driver_license_types', 'employment' => 'employment', 'employments' => 'employments', 'has_vehicle' => 'has_vehicle', 'language' => 'language', 'metro' => 'metro', 'paid_services' => 'paid_services', 'professional_roles' => 'professional_roles', 'recommendation' => 'recommendation', 'relocation' => 'relocation', 'resume_locale' => 'resume_locale', 'schedule' => 'schedule', 'schedules' => 'schedules', 'site' => 'site', 'skill_set' => 'skill_set', 'skills' => 'skills', 'tags' => 'tags', 'travel_time' => 'travel_time', 'work_ticket' => 'work_ticket', 'actions' => 'actions', 'complaint_status' => 'complaint_status', 'contacts_open_until_date' => 'contacts_open_until_date', 'favorited' => 'favorited', 'job_search_status' => 'job_search_status', 'negotiations_history' => 'negotiations_history', 'owner' => 'owner', 'photo' => 'photo', 'portfolio' => 'portfolio', 'view_without_contacts_reason' => 'view_without_contacts_reason'];

    protected const REQUIRED_FIELDS = ['id', 'title', 'alternate_url', 'real_id', 'created_at', 'updated_at', 'certificate', 'education', 'experience', 'download', 'hidden_fields', 'contact', 'resume_locale', 'citizenship', 'work_ticket', 'recommendation', 'relocation', 'employments', 'schedule', 'schedules', 'site', 'travel_time', 'business_trip_readiness', 'skill_set', 'driver_license_types', 'language', 'paid_services', 'owner', 'favorited', 'portfolio', 'actions', 'complaint_status'];

    protected const NULLABLE_FIELDS = ['title', 'age', 'can_view_full_info', 'contact_view_status', 'experience_group_by_company', 'first_name', 'last_name', 'middle_name', 'birth_date', 'has_vehicle', 'professional_roles', 'skills', 'contacts_open_until_date', 'view_without_contacts_reason'];

    protected const CASTS = ['employment_form' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse::class, 'work_format' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse::class, 'area' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsArea::class, 'certificate' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsCertificate::class], 'citizenship' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameUrl::class], 'download' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload::class, 'education' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducation::class, 'experience_group_by_company' => [\Andy87\ClientsHh\Generated\Schema\Common\ProfileFieldsExperienceGroupItem::class], 'gender' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsGender::class, 'hidden_fields' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'platform' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesId::class, 'salary' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsSalaryProperties::class, 'total_experience' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsTotalExperience::class, 'experience' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsExperience::class], 'business_trip_readiness' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class, 'contact' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesContact::class], 'creds' => \Andy87\ClientsHh\Generated\Schema\Common\CredsResumeCreds::class, 'driver_license_types' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDriverLicenseTypes::class], 'employment' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class, 'employments' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'language' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesLanguageLevel::class], 'metro' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfMetroStation::class, 'paid_services' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmployerPaidServices::class, 'professional_roles' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'recommendation' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsRecommendation::class], 'relocation' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsRelocationPublic::class, 'resume_locale' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class, 'schedule' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class, 'schedules' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'site' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsSite::class], 'tags' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesId::class], 'travel_time' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class, 'work_ticket' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameUrl::class], 'actions' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions::class, 'job_search_status' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime::class, 'negotiations_history' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryForEmployer::class, 'owner' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner::class, 'photo' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId::class, 'portfolio' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsPortfolioNoId::class]];

    /** @var string URL резюме на сайте */
    public string $alternate_url;

    /** @var string Идентификатор резюме */
    public string $id;

    /** @var string|null Желаемая должность */
    public ?string $title;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse|null Schema field employment_form */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse $employment_form = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse|null Schema field work_format */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse $work_format = null;

    /** @var float|null Возраст */
    public ?float $age = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsArea|null Schema field area */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsArea $area = null;

    /** @var bool|null Наличие права просмотра контактной информации в резюме */
    public ?bool $can_view_full_info = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsCertificate> Список сертификатов соискателя */
    public array $certificate;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameUrl> Список гражданств соискателя. Элементы [справочника регионов](#tag/Obshie-spravochniki/operation/get-areas) */
    public array $citizenship;

    /** @var string|null Статус доступа к каналам связи по резюме.

* `FULL` — доступны все контакты соискателя.
* `IPC` — общение доступно только внутри платформы, внешние контакты скрыты.
* `NONE` — каналы связи недоступны
 */
    public ?string $contact_view_status = null;

    /** @var string Дата и время создания резюме */
    public string $created_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload Ссылки для скачивания резюме в разных форматах */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload $download;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducation Образование соискателя.

Особенности сохранения образования:

* Если передать и высшее и среднее образование и уровень образования "средний", то сохранится только среднее образование.
* Если передать и высшее и среднее образование и уровень образования "высшее", то сохранится только высшее образование
 */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducation $education;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ProfileFieldsExperienceGroupItem>|null Группировка опыта работы по компаниям */
    public ?array $experience_group_by_company = null;

    /** @var string|null Имя */
    public ?string $first_name = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsGender|null Schema field gender */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsGender $gender = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Список скрытых полей резюме. Возможные значения элементов приведены в поле `resume_hidden_fields` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public array $hidden_fields;

    /** @var string|null Фамилия */
    public ?string $last_name = null;

    /** @var bool|null Выделено ли резюме в поиске */
    public ?bool $marked = null;

    /** @var string|null Отчество */
    public ?string $middle_name = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesId|null Ресурс, на котором было размещено резюме */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesId $platform = null;

    /** @var string Уникальный идентификатор резюме */
    public string $real_id;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsSalaryProperties|null Schema field salary */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsSalaryProperties $salary = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsTotalExperience|null Schema field total_experience */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsTotalExperience $total_experience = null;

    /** @var string Дата и время обновления резюме */
    public string $updated_at;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsExperience> Опыт работы */
    public array $experience;

    /** @var string|null День рождения (в формате `ГГГГ-ММ-ДД`) */
    public ?string $birth_date = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName Готовность к командировкам. Элемент справочника [business_trip_readiness](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $business_trip_readiness;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesContact> Список контактов соискателя */
    public array $contact;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\CredsResumeCreds|null Schema field creds */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\CredsResumeCreds $creds = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDriverLicenseTypes> Список категорий водительских прав соискателя */
    public array $driver_license_types;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Schema field employment */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $employment = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Список подходящих соискателю типов занятостей. Элементы справочника [employment](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public array $employments;

    /** @var bool|null Наличие личного автомобиля у соискателя */
    public ?bool $has_vehicle = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesLanguageLevel> Список языков, которыми владеет соискатель. Элементы справочника [languages](#tag/Obshie-spravochniki/operation/get-languages) */
    public array $language;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfMetroStation|null Schema field metro */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfMetroStation $metro = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmployerPaidServices Schema field paid_services */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmployerPaidServices $paid_services;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Массив объектов профролей */
    public ?array $professional_roles = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsRecommendation> Список рекомендаций */
    public array $recommendation;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsRelocationPublic Возможность переезда */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsRelocationPublic $relocation;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName Язык, на котором составлено резюме (локаль). Элемент справочника [локали резюме](#tag/Obshie-spravochniki/operation/get-locales) */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $resume_locale;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName Schema field schedule */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $schedule;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Список подходящих соискателю графиков работы. Элементы справочника [schedule](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public array $schedules;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsSite> Профили в соц. сетях и других сервисах */
    public array $site;

    /** @var array<int, string> Ключевые навыки (список уникальных строк) */
    public array $skill_set;

    /** @var string|null Дополнительная информация, описание навыков в свободной форме */
    public ?string $skills = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesId>|null Теги к резюме */
    public ?array $tags = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName Желательное время в пути до работы. Элемент справочника [travel_time](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $travel_time;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameUrl> Список регионов, в которых соискатель имеет разрешение на работу. Элементы [справочника регионов](#tag/Obshie-spravochniki/operation/get-areas)
 */
    public array $work_ticket;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions Дополнительные действия */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions $actions;

    /** @var array<string, mixed> Schema field complaint_status */
    public array $complaint_status;

    /** @var string|null Дата скрытия контактов резюме в формате `YYYY-MM-DD` */
    public ?string $contacts_open_until_date = null;

    /** @var bool Добавлено ли резюме в избранные */
    public bool $favorited;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime|null Для получения данных нужно передать параметр `with_job_search_status=true`.
Возможные значения перечислены в поле `job_search_statuses_employer` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime $job_search_status = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryForEmployer|null Краткая история откликов/приглашений по резюме */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryForEmployer $negotiations_history = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner Информация о владельце резюме */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner $owner;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId|null Schema field photo */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId $photo = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsPortfolioNoId> Список изображений в портфолио пользователя */
    public array $portfolio;

    /** @var string|null Причина скрытия контактов */
    public ?string $view_without_contacts_reason = null;
}
