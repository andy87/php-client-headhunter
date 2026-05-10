<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerAddresses\Employer;

use and_y87\ClientsHh\Generated\Response\GetEmployerAddressesResponse as BaseGetEmployerAddressesResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/addresses.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-addresses
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerAddressesEmployerAddressItem> $items Список адресов работодателя
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 */
class GetAddressesResponse extends BaseGetEmployerAddressesResponse
{
}
