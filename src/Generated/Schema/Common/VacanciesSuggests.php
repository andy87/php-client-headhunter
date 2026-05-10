<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesSuggests.
 */
class VacanciesSuggests extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['found' => 'found', 'value' => 'value'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Найдено результатов по предложенному запросу */
    public ?int $found = null;

    /** @var string|null Предложенный текст запроса */
    public ?string $value = null;
}
