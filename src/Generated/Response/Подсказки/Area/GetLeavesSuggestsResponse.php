<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Подсказки\Area;

use Andy87\ClientsHh\Generated\Response\GetAreaLeavesSuggestsResponse as BaseGetAreaLeavesSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/area_leaves.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-area-leaves-suggests
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsAreasItem> $items Информация о найденных регионах
 */
class GetLeavesSuggestsResponse extends BaseGetAreaLeavesSuggestsResponse
{
}
