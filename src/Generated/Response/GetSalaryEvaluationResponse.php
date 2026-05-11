<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /salary_statistics/paid/salary_evaluation/{area_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-salary-evaluation
 */
class GetSalaryEvaluationResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['market_salary' => 'market_salary', 'resulting_parameters' => 'resulting_parameters'];

    protected const REQUIRED_FIELDS = ['market_salary', 'resulting_parameters'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['market_salary' => \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary::class, 'resulting_parameters' => \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters::class];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsEvaluationResponse::class;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary Response field market_salary */
    public \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary $market_salary;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters Response field resulting_parameters */
    public \and_y87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters $resulting_parameters;
}
