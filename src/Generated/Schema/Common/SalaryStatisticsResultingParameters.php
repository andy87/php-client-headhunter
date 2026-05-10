<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SalaryStatisticsResultingParameters.
 */
class SalaryStatisticsResultingParameters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['areas' => 'areas', 'employee_levels' => 'employee_levels', 'employers_count' => 'employers_count', 'excluded_areas' => 'excluded_areas', 'indirect_calculation' => 'indirect_calculation', 'industries' => 'industries', 'positions_count' => 'positions_count', 'sources' => 'sources', 'specialities' => 'specialities'];

    protected const REQUIRED_FIELDS = ['areas', 'sources', 'employers_count', 'positions_count'];

    protected const NULLABLE_FIELDS = ['employee_levels', 'excluded_areas', 'indirect_calculation', 'industries', 'specialities'];

    protected const CASTS = ['areas' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'employee_levels' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'excluded_areas' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'industries' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'specialities' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Коды регионов */
    public array $areas;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Уровни специалистов */
    public ?array $employee_levels = null;

    /** @var float Количество работодателей, позиции которых участвуют в выборке */
    public float $employers_count;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Исключенные коды регионов */
    public ?array $excluded_areas = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsIndirectCalculation|null Параметры косвенной оценки зарплат */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsIndirectCalculation $indirect_calculation = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Отрасли */
    public ?array $industries = null;

    /** @var float Количество позиций, по которым построена выборка */
    public float $positions_count;

    /** @var array<int, string> Источники данных. Возможные значения:

* `SALARIES` — данные из банка зарплат;
* `RESUMES` — данные из резюме;
* `VACANCIES` — данные из вакансий
 */
    public array $sources;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Профессиональные области и специализации */
    public ?array $specialities = null;
}
