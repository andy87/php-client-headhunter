<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyManagerGet.
 */
class VacancyManagerGet extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['id'];

    protected const CASTS = [];

    /** @var string|null Ответственный за вакансию менеджер */
    public ?string $id = null;
}
