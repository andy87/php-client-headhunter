<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancySchedule.
 */
class VacancySchedule extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['id'];

    protected const CASTS = [];

    /** @var string|null График работы из [справочника schedule](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $id = null;
}
