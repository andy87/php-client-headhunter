<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancySalaryRangeSalaryRangeModeOutput.
 */
class VacancySalaryRangeSalaryRangeModeOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Элементы из [справочника salary_range_mode](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $id = null;

    /** @var string|null Название типа грануляции указанной зарплаты */
    public ?string $name = null;
}
