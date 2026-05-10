<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\АдресаРаботодателя\Employer;

use Andy87\ClientsHh\Generated\Response\GetEmployerAddressesResponse as BaseGetEmployerAddressesResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/addresses.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-addresses
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerAddressesEmployerAddressItem> $items Список адресов работодателя
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 */
class GetAddressesResponse extends BaseGetEmployerAddressesResponse
{
}
