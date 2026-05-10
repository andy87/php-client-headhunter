<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancySnippet.
 */
class VacancySnippet extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['requirement' => 'requirement', 'responsibility' => 'responsibility'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['requirement', 'responsibility'];

    protected const CASTS = [];

    /** @var string|null Отрывок из требований по вакансии, если они найдены в тексте описания */
    public ?string $requirement = null;

    /** @var string|null Отрывок из обязанностей по вакансии, если они найдены в тексте описания */
    public ?string $responsibility = null;
}
