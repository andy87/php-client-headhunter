<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonErrorRequestId.
 */
class ErrorsCommonErrorRequestId extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['request_id' => 'request_id'];

    protected const REQUIRED_FIELDS = ['request_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор запроса */
    public string $request_id;
}
