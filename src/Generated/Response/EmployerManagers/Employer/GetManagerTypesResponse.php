<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\EmployerManagers\Employer;

use Andy87\ClientsHh\Generated\Response\GetEmployerManagerTypesResponse as BaseGetEmployerManagerTypesResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/manager_types.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-manager-types
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesEmployerManagerTypesItem> $items Response field items
 */
class GetManagerTypesResponse extends BaseGetEmployerManagerTypesResponse
{
}
