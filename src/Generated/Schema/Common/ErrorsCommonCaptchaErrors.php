<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonCaptchaErrors.
 */
class ErrorsCommonCaptchaErrors extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['request_id' => 'request_id', 'description' => 'description', 'errors' => 'errors'];

    protected const REQUIRED_FIELDS = ['request_id', 'errors'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errors' => [\and_y87\ClientsHh\Generated\Schema\Common\ErrorsCommonCaptchaError::class]];

    /** @var string Идентификатор запроса */
    public string $request_id;

    /** @var string|null Описание ошибки */
    public ?string $description = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ErrorsCommonCaptchaError> Массив с данными ошибок */
    public array $errors;
}
