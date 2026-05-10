<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SalaryStatisticsResultingParameters.
 */
class SalaryStatisticsResultingParameters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['areas' => 'areas', 'employee_levels' => 'employee_levels', 'employers_count' => 'employers_count', 'excluded_areas' => 'excluded_areas', 'indirect_calculation' => 'indirect_calculation', 'industries' => 'industries', 'positions_count' => 'positions_count', 'sources' => 'sources', 'specialities' => 'specialities'];

    protected const REQUIRED_FIELDS = ['areas', 'sources', 'employers_count', 'positions_count'];

    protected const NULLABLE_FIELDS = ['employee_levels', 'excluded_areas', 'indirect_calculation', 'industries', 'specialities'];

    protected const CASTS = ['areas' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'employee_levels' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'excluded_areas' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'industries' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'specialities' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName> Коды регионов */
    public array $areas;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Уровни специалистов */
    public ?array $employee_levels = null;

    /** @var float Количество работодателей, позиции которых участвуют в выборке */
    public float $employers_count;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Исключенные коды регионов */
    public ?array $excluded_areas = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsIndirectCalculation|null Параметры косвенной оценки зарплат */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsIndirectCalculation $indirect_calculation = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Отрасли */
    public ?array $industries = null;

    /** @var float Количество позиций, по которым построена выборка */
    public float $positions_count;

    /** @var array<int, string> Источники данных. Возможные значения:

* `SALARIES` — данные из банка зарплат;
* `RESUMES` — данные из резюме;
* `VACANCIES` — данные из вакансий
 */
    public array $sources;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Профессиональные области и специализации */
    public ?array $specialities = null;
}
