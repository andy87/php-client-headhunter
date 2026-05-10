<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsVacancyError.
 */
class ErrorsVacancyError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['found' => 'found', 'items' => 'items', 'reason' => 'reason', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Количество найденных дублей вакансии */
    public ?float $found = null;

    /** @var array<int, array<string, mixed>>|null Массив идентификаторов вакансий-дублей */
    public ?array $items = null;

    /** @var string|null Причина ошибки */
    public ?string $reason = null;

    /** @var string Тип ошибки */
    public string $type;

    /** @var string Наименование поля с ошибкой */
    public string $value;
}
