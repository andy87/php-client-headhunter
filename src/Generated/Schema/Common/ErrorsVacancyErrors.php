<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsVacancyErrors.
 */
class ErrorsVacancyErrors extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['request_id' => 'request_id', 'errors' => 'errors'];

    protected const REQUIRED_FIELDS = ['request_id', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\Andy87\ClientsHh\Generated\Schema\Common\ErrorsVacancyError::class]];

    /** @var string Идентификатор запроса */
    public string $request_id;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ErrorsVacancyError> Массив с данными ошибок */
    public array $errors;
}
