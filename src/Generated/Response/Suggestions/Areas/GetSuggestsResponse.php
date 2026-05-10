<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\Suggestions\Areas;

use and_y87\ClientsHh\Generated\Response\GetAreasSuggestsResponse as BaseGetAreasSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/areas.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-areas-suggests
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsAreasItem> $items Информация о найденных регионах
 */
class GetSuggestsResponse extends BaseGetAreasSuggestsResponse
{
}
