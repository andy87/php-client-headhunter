<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyProlongateUnavailableActions.
 */
class VacanciesVacancyProlongateUnavailableActions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['disable_reason' => 'disable_reason', 'enabled' => 'enabled', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'enabled', 'disable_reason'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['disable_reason' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var array<string, mixed> Schema field disable_reason */
    public array $disable_reason;

    /** @var bool Возможно ли выполнить действие */
    public bool $enabled;

    /** @var string Идентификатор действия */
    public string $id;
}
