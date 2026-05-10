<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookPayloadVacancyChange.
 */
class WebhookPayloadVacancyChange extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['change_date' => 'change_date', 'vacancy_id' => 'vacancy_id'];

    protected const REQUIRED_FIELDS = ['vacancy_id', 'change_date'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Дата изменения вакансии в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm` */
    public string $change_date;

    /** @var string Идентификатор вакансии */
    public string $vacancy_id;
}
