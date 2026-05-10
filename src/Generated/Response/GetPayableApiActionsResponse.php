<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/services/payable_api_actions/active.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-payable-api-actions
 */
class GetPayableApiActionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployerServicesEmployerServiceItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\EmployerServicesEmployerServices::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerServicesEmployerServiceItem> Response field items */
    public array $items;
}
