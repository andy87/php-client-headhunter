<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\CompanySuggestions\Registered;

use Andy87\ClientsHh\Generated\Response\GetRegisteredCompaniesSuggestsResponse as BaseGetRegisteredCompaniesSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/companies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-registered-companies-suggests
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsCompanyItem> $items Информация о найденных организациях
 */
class GetCompaniesSuggestsResponse extends BaseGetRegisteredCompaniesSuggestsResponse
{
}
