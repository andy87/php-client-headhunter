<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\CompanySuggestions\Registered;

use and_y87\ClientsHh\Generated\Response\GetRegisteredCompaniesSuggestsResponse as BaseGetRegisteredCompaniesSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/companies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-registered-companies-suggests
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsCompanyItem> $items Информация о найденных организациях
 */
class GetCompaniesSuggestsResponse extends BaseGetRegisteredCompaniesSuggestsResponse
{
}
