<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationTestResultsResponse.
 */
class NegotiationsNegotiationTestResultsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['test_result' => 'test_result'];

    protected const REQUIRED_FIELDS = ['test_result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Пройденные тесты кандидата */
    public array $test_result;
}
