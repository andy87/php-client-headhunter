<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\БанкДанныхОЗарплатах\Salary;

use Andy87\ClientsHh\Generated\Response\GetSalaryEvaluationResponse as BaseGetSalaryEvaluationResponse;

/**
 * Ответ HeadHunter API [GET] /salary_statistics/paid/salary_evaluation/{area_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-salary-evaluation
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsMarketSalary $market_salary Response field market_salary
 * @property \Andy87\ClientsHh\Generated\Schema\Common\SalaryStatisticsResultingParameters $resulting_parameters Response field resulting_parameters
 */
class GetEvaluationResponse extends BaseGetSalaryEvaluationResponse
{
}
