<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesFixes.
 */
class VacanciesFixes extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['fixed' => 'fixed', 'original' => 'original'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Текст запроса после исправления */
    public ?string $fixed = null;

    /** @var string|null Исходный текст запроса */
    public ?string $original = null;
}
