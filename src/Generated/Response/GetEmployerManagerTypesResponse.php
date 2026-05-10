<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesEmployerManagerTypesItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesResponse::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesEmployerManagerTypesItem> Response field items */
    public array $items;
}
