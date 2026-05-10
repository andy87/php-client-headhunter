<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyHiddenDeprecated.
 */
class VacancyHiddenDeprecated extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['hidden' => 'hidden'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Удалена ли вакансия (скрыта из архива). Оставлено для обеспечения обратной совместимости */
    public ?bool $hidden = null;
}
