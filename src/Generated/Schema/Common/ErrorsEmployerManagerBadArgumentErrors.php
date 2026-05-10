<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsEmployerManagerBadArgumentErrors.
 */
class ErrorsEmployerManagerBadArgumentErrors extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['request_id' => 'request_id', 'errors' => 'errors'];

    protected const REQUIRED_FIELDS = ['request_id', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\and_y87\ClientsHh\Generated\Schema\Common\ErrorsEmployerManagerBadArgumentError::class]];

    /** @var string Идентификатор запроса */
    public string $request_id;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ErrorsEmployerManagerBadArgumentError> Массив с данными ошибок */
    public array $errors;
}
