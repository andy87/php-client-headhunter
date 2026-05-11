<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/manager_types.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-manager-types
 */
class GetEmployerManagerTypesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesEmployerManagerTypesItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesResponse::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesEmployerManagerTypesItem> Response field items */
    public array $items;
}
