<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /clickme/statistics.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-clickme-statistics
 */
class GetClickmeStatisticsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\ClickmeStatisticsItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\ClickmeStatisticsResponse::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ClickmeStatisticsItem> Response field items */
    public array $items;
}
