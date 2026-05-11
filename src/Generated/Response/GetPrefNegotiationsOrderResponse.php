<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{id}/preferred_negotiations_order.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-pref-negotiations-order
 */
class GetPrefNegotiationsOrderResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['order_type' => 'order_type'];

    protected const REQUIRED_FIELDS = ['order_type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['order_type' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\VacanciesPreferredNegotiationsOrder::class;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName Тип сортировки */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $order_type;
}
