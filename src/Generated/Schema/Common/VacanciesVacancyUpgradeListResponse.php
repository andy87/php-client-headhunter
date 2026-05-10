<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyUpgradeListResponse.
 */
class VacanciesVacancyUpgradeListResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error_reason' => 'error_reason', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = ['error_reason'];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListItem::class]];

    /** @var string|null Описание ошибки в случае невозможности смены тарифа */
    public ?string $error_reason = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyUpgradeListItem> Список улучшений для вакансий */
    public array $items;
}
