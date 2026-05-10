<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonConflictBothChangedErrors.
 */
class ErrorsCommonConflictBothChangedErrors extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['request_id' => 'request_id', 'bad_argument' => 'bad_argument', 'bad_arguments' => 'bad_arguments', 'description' => 'description', 'errors' => 'errors'];

    protected const REQUIRED_FIELDS = ['request_id', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['bad_arguments' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesNameDescription::class], 'errors' => [\Andy87\ClientsHh\Generated\Schema\Common\ErrorsCommonConflictBothChangedError::class]];

    /** @var string Идентификатор запроса */
    public string $request_id;

    /** @var string|null Имя аргумента, с которым связана ошибка */
    public ?string $bad_argument = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesNameDescription>|null Список аргументов, с которыми связаны ошибки */
    public ?array $bad_arguments = null;

    /** @var string|null Описание причины ошибки */
    public ?string $description = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ErrorsCommonConflictBothChangedError> Массив с данными ошибок */
    public array $errors;
}
