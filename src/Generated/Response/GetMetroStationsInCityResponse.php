<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /metro/{city_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-metro-stations-in-city
 */
class GetMetroStationsInCityResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['id' => 'id', 'lines' => 'lines', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'lines'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['lines' => [\and_y87\ClientsHh\Generated\Schema\Common\MetroMetroLineWithStations::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\MetroCityMetroItem::class;

    /** @var string Идентификатор города */
    public string $id;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\MetroMetroLineWithStations> Список линий метро в городе */
    public array $lines;

    /** @var string Название города */
    public string $name;
}
