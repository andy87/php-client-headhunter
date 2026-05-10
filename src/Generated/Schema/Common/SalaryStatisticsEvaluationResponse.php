<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SalaryStatisticsEvaluationResponse.
 */
class SalaryStatisticsEvaluationResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['market_salary' => 'market_salary', 'resulting_parameters' => 'resulting_parameters'];

    protected const REQUIRED_FIELDS = ['market_salary', 'resulting_parameters'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['market_salary' => \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary::class, 'resulting_parameters' => \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary Schema field market_salary */
    public \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary $market_salary;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters Schema field resulting_parameters */
    public \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters $resulting_parameters;
}
