<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Suggestions\Areas;

use Andy87\ClientsHh\Generated\Response\GetAreasSuggestsResponse as BaseGetAreasSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/areas.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-areas-suggests
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsAreasItem> $items Информация о найденных регионах
 */
class GetSuggestsResponse extends BaseGetAreasSuggestsResponse
{
}
