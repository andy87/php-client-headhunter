<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\УслугиРаботодателя\Payable;

use Andy87\ClientsHh\Generated\Response\GetPayableApiActionsResponse as BaseGetPayableApiActionsResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/services/payable_api_actions/active.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-payable-api-actions
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerServicesEmployerServiceItem> $items Response field items
 */
class GetApiActionsResponse extends BaseGetPayableApiActionsResponse
{
}
