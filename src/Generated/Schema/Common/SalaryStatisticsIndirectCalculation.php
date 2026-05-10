<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SalaryStatisticsIndirectCalculation.
 */
class SalaryStatisticsIndirectCalculation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['indirect_areas' => 'indirect_areas', 'indirect_employee_levels' => 'indirect_employee_levels', 'indirect_regional_ratio' => 'indirect_regional_ratio'];

    protected const REQUIRED_FIELDS = ['indirect_regional_ratio'];

    protected const NULLABLE_FIELDS = ['indirect_areas', 'indirect_employee_levels'];

    protected const CASTS = ['indirect_areas' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'indirect_employee_levels' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Регионы, использованные при получении косвенной оценки */
    public ?array $indirect_areas = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Уровни специалистов, включенные в выборку в регионе, использованном при получении косвенной оценки */
    public ?array $indirect_employee_levels = null;

    /** @var float Региональный коэффициент, который был использован для получения косвенной оценки зарплат */
    public float $indirect_regional_ratio;
}
