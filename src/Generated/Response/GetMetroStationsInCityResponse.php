<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['lines' => [\Andy87\ClientsHh\Generated\Schema\Common\MetroMetroLineWithStations::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\MetroCityMetroItem::class;

    /** @var string Идентификатор города */
    public string $id;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\MetroMetroLineWithStations> Список линий метро в городе */
    public array $lines;

    /** @var string Название города */
    public string $name;
}
