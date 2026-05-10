<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SalaryStatisticsEvaluationResponse.
 */
class SalaryStatisticsEvaluationResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['market_salary' => 'market_salary', 'resulting_parameters' => 'resulting_parameters'];

    protected const REQUIRED_FIELDS = ['market_salary', 'resulting_parameters'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['market_salary' => \Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary::class, 'resulting_parameters' => \Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary Schema field market_salary */
    public \Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary $market_salary;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters Schema field resulting_parameters */
    public \Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters $resulting_parameters;
}
