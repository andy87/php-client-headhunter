<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeEmployerFields.
 */
class ResumeEmployerFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actions' => 'actions', 'can_view_full_info' => 'can_view_full_info', 'complaint_status' => 'complaint_status', 'contact_view_status' => 'contact_view_status', 'contacts_open_until_date' => 'contacts_open_until_date', 'favorited' => 'favorited', 'job_search_status' => 'job_search_status', 'negotiations_history' => 'negotiations_history', 'owner' => 'owner', 'paid_services' => 'paid_services', 'photo' => 'photo', 'portfolio' => 'portfolio', 'view_without_contacts_reason' => 'view_without_contacts_reason'];

    protected const REQUIRED_FIELDS = ['owner', 'favorited', 'portfolio', 'paid_services', 'actions', 'complaint_status'];

    protected const NULLABLE_FIELDS = ['can_view_full_info', 'contact_view_status', 'contacts_open_until_date', 'view_without_contacts_reason'];

    protected const CASTS = ['actions' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions::class, 'job_search_status' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime::class, 'negotiations_history' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryForEmployer::class, 'owner' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner::class, 'paid_services' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmployerPaidServices::class, 'photo' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId::class, 'portfolio' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsPortfolioNoId::class]];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions Дополнительные действия */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsActions $actions;

    /** @var bool|null Наличие права просмотра контактной информации в резюме */
    public ?bool $can_view_full_info = null;

    /** @var array<string, mixed> Schema field complaint_status */
    public array $complaint_status;

    /** @var string|null Статус доступа к каналам связи по резюме.

* `FULL` — доступны все контакты соискателя.
* `IPC` — общение доступно только внутри платформы, внешние контакты скрыты.
* `NONE` — каналы связи недоступны
 */
    public ?string $contact_view_status = null;

    /** @var string|null Дата скрытия контактов резюме в формате `YYYY-MM-DD` */
    public ?string $contacts_open_until_date = null;

    /** @var bool Добавлено ли резюме в избранные */
    public bool $favorited;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime|null Для получения данных нужно передать параметр `with_job_search_status=true`.
Возможные значения перечислены в поле `job_search_statuses_employer` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime $job_search_status = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryForEmployer|null Краткая история откликов/приглашений по резюме */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsNegotiationsHistoryForEmployer $negotiations_history = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner Информация о владельце резюме */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOwner $owner;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmployerPaidServices Schema field paid_services */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsEmployerPaidServices $paid_services;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId|null Schema field photo */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfPhotoNoId $photo = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsPortfolioNoId> Список изображений в портфолио пользователя */
    public array $portfolio;

    /** @var string|null Причина скрытия контактов */
    public ?string $view_without_contacts_reason = null;
}
