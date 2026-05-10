<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftAssignedManager.
 */
class VacancyDraftAssignedManager extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['full_name' => 'full_name', 'id' => 'id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null ФИО */
    public ?string $full_name = null;

    /** @var string|null Идентификатор рабочего аккаунта менеджера, которому перейдет вакансия после публикации */
    public ?string $id = null;
}
