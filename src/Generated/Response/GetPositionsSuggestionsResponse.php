<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/positions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-positions-suggestions
 */
class GetPositionsSuggestionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\SuggestsPositionItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\SuggestsPositions::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsPositionItem> Информация о найденных должностях */
    public array $items;
}
