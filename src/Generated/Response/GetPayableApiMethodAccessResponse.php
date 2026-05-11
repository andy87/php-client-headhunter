<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/method_access.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-payable-api-method-access
 */
class GetPayableApiMethodAccessResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\EmployerServicesMethodAccessItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\EmployerServicesMethodAccess::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerServicesMethodAccessItem> Response field items */
    public array $items;
}
