<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyEmploymentOutput.
 */
class VacancyEmploymentOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['id'];

    protected const CASTS = [];

    /** @var string|null Тип занятости из [справочника employment](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $id = null;

    /** @var string|null Название типа занятости */
    public ?string $name = null;
}
