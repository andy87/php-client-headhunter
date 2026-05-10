<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftVacancyDraftBase.
 */
class VacancyDraftVacancyDraftBase extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['auto_publication' => 'auto_publication', 'completed_fields_percentage' => 'completed_fields_percentage', 'draft_id' => 'draft_id', 'insufficient_publications' => 'insufficient_publications', 'insufficient_quotas' => 'insufficient_quotas', 'last_change_time' => 'last_change_time', 'publication_ready' => 'publication_ready', 'required_publications' => 'required_publications', 'scheduled_at' => 'scheduled_at'];

    protected const REQUIRED_FIELDS = ['completed_fields_percentage', 'draft_id', 'publication_ready', 'scheduled_at'];

    protected const NULLABLE_FIELDS = ['auto_publication', 'insufficient_publications', 'insufficient_quotas', 'last_change_time', 'required_publications', 'scheduled_at'];

    protected const CASTS = ['insufficient_publications' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications::class], 'insufficient_quotas' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications::class], 'required_publications' => [\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications::class]];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAutoPublicationState|null Состояние автопубликации. Объект при активной автопубликации, иначе null */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftAutoPublicationState $auto_publication = null;

    /** @var float Процент заполнения черновика */
    public float $completed_fields_percentage;

    /** @var string Идентификатор черновика */
    public string $draft_id;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications>|null Массив объектов с информацией о том, каких публикаций не хватает на счету для публикации вакансии из данного черновика */
    public ?array $insufficient_publications = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications>|null Массив объектов с информацией о том, какие квоты превышены */
    public ?array $insufficient_quotas = null;

    /** @var string|null Время изменения черновика (в формате [ISO 8601](https://ru.wikipedia.org/wiki/ISO_8601) с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`) */
    public ?string $last_change_time = null;

    /** @var bool Готовность черновика к публикации */
    public bool $publication_ready;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftPublications>|null Массив объектов с информацией о необходимых публикациях на счету */
    public ?array $required_publications = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftScheduledAt|null Schema field scheduled_at */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftScheduledAt $scheduled_at;
}
