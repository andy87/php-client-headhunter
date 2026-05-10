<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\SuggestsPositionItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\SuggestsPositions::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsPositionItem> Информация о найденных должностях */
    public array $items;
}
