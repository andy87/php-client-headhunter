<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyEmployerBlacklisted.
 */
class VacancyEmployerBlacklisted extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['blacklisted' => 'blacklisted'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Добавлены ли все вакансии работодателя в список скрытых */
    public ?bool $blacklisted = null;
}
