<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftVacanciesDraftResponse.
 */
class VacancyDraftVacanciesDraftResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['vacancy_ids' => 'vacancy_ids'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, float>|null Schema field vacancy_ids */
    public ?array $vacancy_ids = null;
}
