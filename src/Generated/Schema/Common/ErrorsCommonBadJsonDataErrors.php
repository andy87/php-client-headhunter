<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadJsonDataErrors.
 */
class ErrorsCommonBadJsonDataErrors extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['request_id' => 'request_id', 'bad_argument' => 'bad_argument', 'bad_arguments' => 'bad_arguments', 'description' => 'description', 'errors' => 'errors'];

    protected const REQUIRED_FIELDS = ['request_id', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор запроса */
    public string $request_id;

    /** @var string|null Schema field bad_argument */
    public ?string $bad_argument = null;

    /** @var array<int, array<string, mixed>>|null Schema field bad_arguments */
    public ?array $bad_arguments = null;

    /** @var string|null Описание ошибки */
    public ?string $description = null;

    /** @var array<int, mixed> Массив с данными ошибок */
    public array $errors;
}
