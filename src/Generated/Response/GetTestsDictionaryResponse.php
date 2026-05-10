<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/tests.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-tests-dictionary
 */
class GetTestsDictionaryResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployerDictionariesTestItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\EmployerDictionariesTestsResponse::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerDictionariesTestItem> Response field items */
    public array $items;
}
