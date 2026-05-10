<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/areas.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-areas-suggests
 */
class GetAreasSuggestsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\SuggestsAreasItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\SuggestsAreas::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsAreasItem> Информация о найденных регионах */
    public array $items;
}
