<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /negotiations/{nid}/test/solution.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-test-results
 */
class GetNegotiationTestResultsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['test_result' => 'test_result'];

    protected const REQUIRED_FIELDS = ['test_result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationTestResultsResponse::class;

    /** @var array<string, mixed> Пройденные тесты кандидата */
    public array $test_result;
}
