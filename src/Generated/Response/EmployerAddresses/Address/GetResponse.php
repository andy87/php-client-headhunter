<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerAddresses\Address;

use and_y87\ClientsHh\Generated\Response\GetAddressResponse as BaseGetAddressResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/addresses/{address_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-address
 *
 * @property string|null $building Номер дома
 * @property bool|null $can_edit Имеет ли текущий пользователь право редактировать этот адрес
 * @property string|null $city Город
 * @property bool|null $deleted Удалён ли адрес
 * @property string|null $description Дополнительная информация об адресе
 * @property string|null $id Идентификатор адреса
 * @property float|null $lat Географическая широта
 * @property float|null $lng Географическая долгота
 * @property array<string, mixed>|null $manager Информация о менеджере, создавшем адрес
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesMetroStation>|null $metro_stations Response field metro_stations
 * @property string|null $rawData Полный адрес
 * @property string|null $street Улица
 */
class GetResponse extends BaseGetAddressResponse
{
}
