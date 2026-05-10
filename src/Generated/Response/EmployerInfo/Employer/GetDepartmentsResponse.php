<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerInfo\Employer;

use and_y87\ClientsHh\Generated\Response\GetEmployerDepartmentsResponse as BaseGetEmployerDepartmentsResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/departments.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-departments
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName> $items Список департаментов работодателя
 */
class GetDepartmentsResponse extends BaseGetEmployerDepartmentsResponse
{
}
