<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyWorkFormatWorkFormatItem.
 */
class VacancyWorkFormatWorkFormatItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Элементы из [справочника work_format](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $id = null;
}
