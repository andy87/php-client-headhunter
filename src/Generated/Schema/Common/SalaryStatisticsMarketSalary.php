<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SalaryStatisticsMarketSalary.
 */
class SalaryStatisticsMarketSalary extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['average' => 'average', 'bottom' => 'bottom', 'maximum' => 'maximum', 'median' => 'median', 'minimum' => 'minimum', 'upper' => 'upper'];

    protected const REQUIRED_FIELDS = ['upper', 'median', 'bottom'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Среднее расчетное значение */
    public ?float $average = null;

    /** @var float Нижняя граница рыночного диапазона (25-й процентиль) */
    public float $bottom;

    /** @var float|null Максимальные значения (90-й процентиль) */
    public ?float $maximum = null;

    /** @var float Медианное рыночное значение */
    public float $median;

    /** @var float|null Минимальные значения (10-й процентиль) */
    public ?float $minimum = null;

    /** @var float Верхняя граница рыночного диапазона (75-й процентиль) */
    public float $upper;
}
