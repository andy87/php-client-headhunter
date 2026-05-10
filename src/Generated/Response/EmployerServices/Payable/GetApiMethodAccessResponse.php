<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerServices\Payable;

use and_y87\ClientsHh\Generated\Response\GetPayableApiMethodAccessResponse as BaseGetPayableApiMethodAccessResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/method_access.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-payable-api-method-access
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerServicesMethodAccessItem> $items Response field items
 */
class GetApiMethodAccessResponse extends BaseGetPayableApiMethodAccessResponse
{
}
