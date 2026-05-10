<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftDraftVacancyError.
 */
class VacancyDraftDraftVacancyError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reason' => 'reason', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Причина ошибки */
    public ?string $reason = null;

    /** @var string Название поля, в котором допущена ошибка */
    public string $value;
}
