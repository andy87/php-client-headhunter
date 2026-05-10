<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadArgumentErrors.
 */
class ErrorsCommonBadArgumentErrors extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['request_id' => 'request_id', 'bad_argument' => 'bad_argument', 'bad_arguments' => 'bad_arguments', 'description' => 'description', 'errors' => 'errors'];

    protected const REQUIRED_FIELDS = ['request_id', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\and_y87\ClientsHh\Generated\Schema\Common\ErrorsCommonBadArgumentError::class]];

    /** @var string Идентификатор запроса */
    public string $request_id;

    /** @var string|null Schema field bad_argument */
    public ?string $bad_argument = null;

    /** @var array<int, array<string, mixed>>|null Schema field bad_arguments */
    public ?array $bad_arguments = null;

    /** @var string|null Описание ошибки */
    public ?string $description = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ErrorsCommonBadArgumentError> Массив с данными ошибок */
    public array $errors;
}
