<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/companies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-registered-companies-suggests
 */
class GetRegisteredCompaniesSuggestsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\SuggestsCompanyItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\SuggestsCompanies::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsCompanyItem> Информация о найденных организациях */
    public array $items;
}
