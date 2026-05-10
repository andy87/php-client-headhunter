<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /areas/countries.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-countries
 */
class GetCountriesResponse extends AbstractResponse
{
    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\DictionariesCountriesResponse::class;
}
