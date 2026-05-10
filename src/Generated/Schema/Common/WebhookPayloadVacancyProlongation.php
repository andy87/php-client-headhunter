<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookPayloadVacancyProlongation.
 */
class WebhookPayloadVacancyProlongation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['prolongation_date' => 'prolongation_date', 'vacancy_id' => 'vacancy_id'];

    protected const REQUIRED_FIELDS = ['vacancy_id', 'prolongation_date'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Дата продления вакансии в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm` */
    public string $prolongation_date;

    /** @var string Идентификатор вакансии */
    public string $vacancy_id;
}
