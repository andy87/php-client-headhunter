<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeResumeShort.
 */
class ResumeResumeShort extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alternate_url' => 'alternate_url', 'id' => 'id', 'title' => 'title', 'employment_form' => 'employment_form', 'work_format' => 'work_format', 'age' => 'age', 'area' => 'area', 'can_view_full_info' => 'can_view_full_info', 'certificate' => 'certificate', 'citizenship' => 'citizenship', 'contact_view_status' => 'contact_view_status', 'created_at' => 'created_at', 'download' => 'download', 'education' => 'education', 'experience_group_by_company' => 'experience_group_by_company', 'first_name' => 'first_name', 'gender' => 'gender', 'hidden_fields' => 'hidden_fields', 'last_name' => 'last_name', 'marked' => 'marked', 'middle_name' => 'middle_name', 'platform' => 'platform', 'real_id' => 'real_id', 'salary' => 'salary', 'total_experience' => 'total_experience', 'updated_at' => 'updated_at', 'actions' => 'actions', 'experience' => 'experience', 'favorited' => 'favorited', 'negotiations_history' => 'negotiations_history', 'owner' => 'owner', 'photo' => 'photo', 'tags' => 'tags', 'viewed' => 'viewed'];

    protected const REQUIRED_FIELDS = ['id', 'title', 'alternate_url', 'real_id', 'created_at', 'updated_at', 'certificate', 'education', 'experience', 'download', 'hidden_fields', 'owner', 'negotiations_history', 'favorited', 'actions'];

    protected const NULLABLE_FIELDS = ['title', 'age', 'can_view_full_info', 'contact_view_status', 'experience_group_by_company', 'first_name', 'last_name', 'middle_name'];

    protected const CASTS = ['employment_form' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse::class, 'work_format' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse::class, 'area' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsArea::class, 'certificate' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsCertificate::class], 'citizenship' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesArea::class], 'download' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload::class, 'education' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducation::class, 'experience_group_by_company' => [\and_y87\ClientsHh\Generated\Schema\Common\ProfileFieldsExperienceGroupItem::class], 'gender' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsGender::class, 'hidden_fields' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'platform' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesId::class, 'salary' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsSalaryProperties::class, 'total_experience' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsTotalExperience::class, 'actions' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions::class, 'experience' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsExperienceShort::class], 'negotiations_history' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryUrl::class, 'owner' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner::class, 'photo' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId::class, 'tags' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesId::class]];

    /** @var string URL резюме на сайте */
    public string $alternate_url;

    /** @var string Идентификатор резюме */
    public string $id;

    /** @var string|null Желаемая должность */
    public ?string $title;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse|null Schema field employment_form */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmploymentFormEmploymentFormResponse $employment_form = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse|null Schema field work_format */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsWorkFormatWorkFormatResponse $work_format = null;

    /** @var float|null Возраст */
    public ?float $age = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsArea|null Schema field area */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsArea $area = null;

    /** @var bool|null Доступен ли просмотр контактной информации в резюме текущему работодателю */
    public ?bool $can_view_full_info = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsCertificate> Список сертификатов соискателя */
    public array $certificate;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea>|null Список гражданств */
    public ?array $citizenship = null;

    /** @var string|null Статус доступа к каналам связи по резюме.

* `FULL` - доступны все контакты соискателя.
* `IPC` - общение доступно только внутри платформы, внешние контакты скрыты.
* `NONE` - каналы связи недоступны
 */
    public ?string $contact_view_status = null;

    /** @var string Дата и время создания резюме */
    public string $created_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload Ссылки для скачивания резюме в разных форматах */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload $download;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducation Образование соискателя.

Особенности сохранения образования:

* Если передать и высшее и среднее образование и уровень образования "средний", то сохранится только среднее образование.
* Если передать и высшее и среднее образование и уровень образования "высшее", то сохранится только высшее образование
 */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEducation $education;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ProfileFieldsExperienceGroupItem>|null Группировка опыта работы по компаниям */
    public ?array $experience_group_by_company = null;

    /** @var string|null Имя */
    public ?string $first_name = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsGender|null Schema field gender */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsGender $gender = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName> Список скрытых полей резюме. Возможные значения элементов приведены в поле `resume_hidden_fields` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public array $hidden_fields;

    /** @var string|null Фамилия */
    public ?string $last_name = null;

    /** @var bool|null Выделено ли резюме в поиске */
    public ?bool $marked = null;

    /** @var string|null Отчество */
    public ?string $middle_name = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesId|null Ресурс, на котором было размещено резюме */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesId $platform = null;

    /** @var string Уникальный идентификатор резюме */
    public string $real_id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsSalaryProperties|null Schema field salary */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsSalaryProperties $salary = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsTotalExperience|null Schema field total_experience */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsTotalExperience $total_experience = null;

    /** @var string Дата и время обновления резюме */
    public string $updated_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions Schema field actions */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions $actions;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsExperienceShort> Опыт работы. В объекте опыта отсутствует описание (поле description) */
    public array $experience;

    /** @var bool Добавлено ли резюме в избранные */
    public bool $favorited;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryUrl Краткая история откликов/приглашений по резюме */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryUrl $negotiations_history;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner Информация о владельце резюме */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner $owner;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId|null Schema field photo */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId $photo = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesId>|null Теги к резюме */
    public ?array $tags = null;

    /** @var bool|null Было ли резюме уже просмотрено менеджером */
    public ?bool $viewed = null;
}
