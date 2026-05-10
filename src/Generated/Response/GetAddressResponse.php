<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/addresses/{address_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-address
 */
class GetAddressResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['building' => 'building', 'can_edit' => 'can_edit', 'city' => 'city', 'deleted' => 'deleted', 'description' => 'description', 'id' => 'id', 'lat' => 'lat', 'lng' => 'lng', 'manager' => 'manager', 'metro_stations' => 'metro_stations', 'rawData' => 'raw', 'street' => 'street'];

    protected const REQUIRED_FIELDS = ['city', 'lat', 'lng'];

    protected const NULLABLE_FIELDS = ['building', 'city', 'description', 'lat', 'lng', 'manager', 'rawData', 'street'];

    protected const CASTS = ['metro_stations' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesMetroStation::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\EmployerAddressesEmployerAddressItemResponse::class;

    /** @var string|null Номер дома */
    public ?string $building = null;

    /** @var bool|null Имеет ли текущий пользователь право редактировать этот адрес */
    public ?bool $can_edit = null;

    /** @var string|null Город */
    public ?string $city;

    /** @var bool|null Удалён ли адрес */
    public ?bool $deleted = null;

    /** @var string|null Дополнительная информация об адресе */
    public ?string $description = null;

    /** @var string|null Идентификатор адреса */
    public ?string $id = null;

    /** @var float|null Географическая широта */
    public ?float $lat;

    /** @var float|null Географическая долгота */
    public ?float $lng;

    /** @var array<string, mixed>|null Информация о менеджере, создавшем адрес */
    public ?array $manager = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesMetroStation>|null Response field metro_stations */
    public ?array $metro_stations = null;

    /** @var string|null Полный адрес */
    public ?string $rawData = null;

    /** @var string|null Улица */
    public ?string $street = null;
}
