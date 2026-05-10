<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsSavedSearchForbiddenErrors.
 */
class ErrorsSavedSearchForbiddenErrors extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['request_id' => 'request_id', 'description' => 'description', 'errors' => 'errors'];

    protected const REQUIRED_FIELDS = ['request_id', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\Andy87\ClientsHh\Generated\Schema\Common\ErrorsSavedSearchForbiddenError::class]];

    /** @var string Идентификатор запроса */
    public string $request_id;

    /** @var string|null Описание ошибки */
    public ?string $description = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ErrorsSavedSearchForbiddenError> Массив с данными ошибок */
    public array $errors;
}
