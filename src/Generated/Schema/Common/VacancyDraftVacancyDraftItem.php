<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftVacancyDraftItem.
 */
class VacancyDraftVacancyDraftItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['auto_publication' => 'auto_publication', 'completed_fields_percentage' => 'completed_fields_percentage', 'draft_id' => 'draft_id', 'insufficient_publications' => 'insufficient_publications', 'insufficient_quotas' => 'insufficient_quotas', 'last_change_time' => 'last_change_time', 'publication_ready' => 'publication_ready', 'required_publications' => 'required_publications', 'scheduled_at' => 'scheduled_at', 'areas' => 'areas', 'assigned_manager' => 'assigned_manager', 'auto_response' => 'auto_response', 'billing_type' => 'billing_type', 'closed_for_applicants' => 'closed_for_applicants', 'name' => 'name', 'publication_type' => 'publication_type', 'url' => 'url', 'vacancy_properties' => 'vacancy_properties', 'vacancy_type' => 'vacancy_type'];

    protected const REQUIRED_FIELDS = ['completed_fields_percentage', 'draft_id', 'publication_ready', 'scheduled_at', 'areas', 'publication_type', 'billing_type', 'vacancy_type', 'url'];

    protected const NULLABLE_FIELDS = ['auto_publication', 'insufficient_publications', 'insufficient_quotas', 'last_change_time', 'required_publications', 'scheduled_at', 'vacancy_type'];

    protected const CASTS = ['insufficient_publications' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications::class], 'insufficient_quotas' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications::class], 'required_publications' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications::class], 'areas' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyAreaOutput::class], 'assigned_manager' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManager::class, 'auto_response' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse::class, 'billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput::class, 'closed_for_applicants' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'vacancy_properties' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyProperties::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAutoPublicationState|null Состояние автопубликации. Объект при активной автопубликации, иначе null */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAutoPublicationState $auto_publication = null;

    /** @var float Процент заполнения черновика */
    public float $completed_fields_percentage;

    /** @var string Идентификатор черновика */
    public string $draft_id;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications>|null Массив объектов с информацией о том, каких публикаций не хватает на счету для публикации вакансии из данного черновика */
    public ?array $insufficient_publications = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications>|null Массив объектов с информацией о том, какие квоты превышены */
    public ?array $insufficient_quotas = null;

    /** @var string|null Время изменения черновика (в формате [ISO 8601](https://ru.wikipedia.org/wiki/ISO_8601) с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`) */
    public ?string $last_change_time = null;

    /** @var bool Готовность черновика к публикации */
    public bool $publication_ready;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications>|null Массив объектов с информацией о необходимых публикациях на счету */
    public ?array $required_publications = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftScheduledAt|null Schema field scheduled_at */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftScheduledAt $scheduled_at;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyAreaOutput> Коды и названия регионов (фед. округа, субъекты федерации, города) */
    public array $areas;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManager|null Schema field assigned_manager */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftAssignedManager $assigned_manager = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse|null Schema field auto_response */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAutoResponse $auto_response = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput Schema field billing_type */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput $billing_type;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null Schema field closed_for_applicants */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants = null;

    /** @var string|null Название вакансии */
    public ?string $name = null;

    /** @var string Тип публикации (справочник [vacancy_billing_type](#tag/Obshie-spravochniki/operation/get-dictionaries)) */
    public string $publication_type;

    /** @var string Url для запроса полной информации черновика */
    public string $url;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyProperties|null Свойства вакансии, такие как тариф, анонимность и другие */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyProperties $vacancy_properties = null;

    /** @var string|null Тип вакансии (справочник [vacancy_type](#tag/Obshie-spravochniki/operation/get-dictionaries)) */
    public ?string $vacancy_type;
}
