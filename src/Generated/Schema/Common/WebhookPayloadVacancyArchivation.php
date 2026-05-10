<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookPayloadVacancyArchivation.
 */
class WebhookPayloadVacancyArchivation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['archivation_date' => 'archivation_date', 'vacancy_id' => 'vacancy_id'];

    protected const REQUIRED_FIELDS = ['vacancy_id', 'archivation_date'];

    protected const NULLABLE_FIELDS = ['vacancy_id'];

    protected const CASTS = [];

    /** @var string Дата архивации вакансии в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm` */
    public string $archivation_date;

    /** @var string|null Идентификатор вакансии */
    public ?string $vacancy_id;
}
