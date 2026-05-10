<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookPayloadVacancyPublicationForVacancyManager.
 */
class WebhookPayloadVacancyPublicationForVacancyManager extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['creation_date' => 'creation_date', 'employer_manager_id' => 'employer_manager_id', 'previous_vacancy_id' => 'previous_vacancy_id', 'vacancy_id' => 'vacancy_id'];

    protected const REQUIRED_FIELDS = ['vacancy_id', 'employer_manager_id', 'creation_date'];

    protected const NULLABLE_FIELDS = ['previous_vacancy_id'];

    protected const CASTS = [];

    /** @var string Дата создания вакансии в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm */
    public string $creation_date;

    /** @var string Идентификатор модератора вакансии */
    public string $employer_manager_id;

    /** @var string|null Идентификатор архивной вакансии, указанной в поле previous_id при публикации вакансии */
    public ?string $previous_vacancy_id = null;

    /** @var string Идентификатор вакансии */
    public string $vacancy_id;
}
