<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\Suggestions\Positions;

use and_y87\ClientsHh\Generated\Response\GetPositionsSuggestionsResponse as BaseGetPositionsSuggestionsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/positions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-positions-suggestions
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsPositionItem> $items Информация о найденных должностях
 */
class GetSuggestionsResponse extends BaseGetPositionsSuggestionsResponse
{
}
