<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsObjectsEmployerTopicResume.
 */
class NegotiationsObjectsEmployerTopicResume extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alternate_url' => 'alternate_url', 'id' => 'id', 'title' => 'title', 'employment_form' => 'employment_form', 'work_format' => 'work_format', 'age' => 'age', 'area' => 'area', 'can_view_full_info' => 'can_view_full_info', 'certificate' => 'certificate', 'citizenship' => 'citizenship', 'contact_view_status' => 'contact_view_status', 'created_at' => 'created_at', 'download' => 'download', 'education' => 'education', 'experience_group_by_company' => 'experience_group_by_company', 'first_name' => 'first_name', 'gender' => 'gender', 'hidden_fields' => 'hidden_fields', 'last_name' => 'last_name', 'marked' => 'marked', 'middle_name' => 'middle_name', 'platform' => 'platform', 'real_id' => 'real_id', 'salary' => 'salary', 'total_experience' => 'total_experience', 'updated_at' => 'updated_at', 'actions' => 'actions', 'experience' => 'experience', 'favorited' => 'favorited', 'negotiations_history' => 'negotiations_history', 'owner' => 'owner', 'photo' => 'photo', 'tags' => 'tags', 'viewed' => 'viewed', 'url' => 'url', 'contacts_open_until_date' => 'contacts_open_until_date', 'job_search_status' => 'job_search_status', 'skill_set' => 'skill_set'];

    protected const REQUIRED_FIELDS = ['id', 'title', 'alternate_url', 'real_id', 'created_at', 'updated_at', 'certificate', 'education', 'experience', 'download', 'hidden_fields', 'owner', 'negotiations_history', 'favorited', 'actions', 'url'];

    protected const NULLABLE_FIELDS = ['title', 'age', 'can_view_full_info', 'contact_view_status', 'experience_group_by_company', 'first_name', 'last_name', 'middle_name', 'contacts_open_until_date', 'skill_set'];

    protected const CASTS = ['employment_form' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse::class, 'work_format' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse::class, 'area' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsArea::class, 'certificate' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsCertificate::class], 'citizenship' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesArea::class], 'download' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload::class, 'education' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducation::class, 'experience_group_by_company' => [\Andy87\ClientsHh\Generated\Schema\Common\ProfileFieldsExperienceGroupItem::class], 'gender' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsGender::class, 'hidden_fields' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'platform' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesId::class, 'salary' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsSalaryProperties::class, 'total_experience' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsTotalExperience::class, 'actions' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions::class, 'experience' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsExperienceShort::class], 'negotiations_history' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryUrl::class, 'owner' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner::class, 'photo' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId::class, 'tags' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesId::class], 'job_search_status' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime::class];

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

    /** @var bool|null Доступен ли просмотр контактной информации в резюме текущему работодателю */
    public ?bool $can_view_full_info = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsCertificate> Список сертификатов соискателя */
    public array $certificate;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea>|null Список гражданств */
    public ?array $citizenship = null;

    /** @var string|null Статус доступа к каналам связи по резюме.

* `FULL` - доступны все контакты соискателя.
* `IPC` - общение доступно только внутри платформы, внешние контакты скрыты.
* `NONE` - каналы связи недоступны
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

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions Schema field actions */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions $actions;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsExperienceShort> Опыт работы. В объекте опыта отсутствует описание (поле description) */
    public array $experience;

    /** @var bool Добавлено ли резюме в избранные */
    public bool $favorited;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryUrl Краткая история откликов/приглашений по резюме */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryUrl $negotiations_history;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner Информация о владельце резюме */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner $owner;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId|null Schema field photo */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId $photo = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesId>|null Теги к резюме */
    public ?array $tags = null;

    /** @var bool|null Было ли резюме уже просмотрено менеджером */
    public ?bool $viewed = null;

    /** @var string Ссылка на получение элементов */
    public string $url;

    /** @var string|null Дата скрытия контактов резюме в формате `YYYY-MM-DD` */
    public ?string $contacts_open_until_date = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime|null Для получения данных нужно передать параметр `with_job_search_status=true`.
Возможные значения перечислены в поле `job_search_statuses_employer` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime $job_search_status = null;

    /** @var array<int, string>|null Ключевые навыки (список уникальных строк) */
    public ?array $skill_set = null;
}
