<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerServices\Payable;

use and_y87\ClientsHh\Generated\Response\GetPayableApiActionsResponse as BaseGetPayableApiActionsResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/services/payable_api_actions/active.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-payable-api-actions
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerServicesEmployerServiceItem> $items Response field items
 */
class GetApiActionsResponse extends BaseGetPayableApiActionsResponse
{
}
