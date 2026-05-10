<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyCounters.
 */
class VacancyCounters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['responses' => 'responses', 'total_responses' => 'total_responses'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Количество откликов на вакансию с момента публикации */
    public ?float $responses = null;

    /** @var float|null Количество откликов на вакансию с момента создания */
    public ?float $total_responses = null;
}
