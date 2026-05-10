<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\CommonReferenceData\Metro;

use and_y87\ClientsHh\Generated\Response\GetMetroStationsInCityResponse as BaseGetMetroStationsInCityResponse;

/**
 * Ответ HeadHunter API [GET] /metro/{city_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-metro-stations-in-city
 *
 * @property string $id Идентификатор города
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\MetroMetroLineWithStations> $lines Список линий метро в городе
 * @property string $name Название города
 */
class GetStationsInCityResponse extends BaseGetMetroStationsInCityResponse
{
}
