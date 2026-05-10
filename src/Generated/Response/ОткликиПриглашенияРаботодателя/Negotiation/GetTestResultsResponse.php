<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Negotiation;

use Andy87\ClientsHh\Generated\Response\GetNegotiationTestResultsResponse as BaseGetNegotiationTestResultsResponse;

/**
 * Ответ HeadHunter API [GET] /negotiations/{nid}/test/solution.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-test-results
 *
 * @property array<string, mixed> $test_result Пройденные тесты кандидата
 */
class GetTestResultsResponse extends BaseGetNegotiationTestResultsResponse
{
}
