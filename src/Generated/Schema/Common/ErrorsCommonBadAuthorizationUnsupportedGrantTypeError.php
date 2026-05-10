<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsCommonBadAuthorizationUnsupportedGrantTypeError.
 */
class ErrorsCommonBadAuthorizationUnsupportedGrantTypeError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error', 'error_description' => 'error_description'];

    protected const REQUIRED_FIELDS = ['error', 'error_description'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор типа ошибки, используются значения, описанные в [документе RFC 6749](https://datatracker.ietf.org/doc/html/rfc6749#section-5.2)
 */
    public string $error;

    /** @var string Дополнительное описание ошибки
* `unsupported grant_type` Возникает, если передать неправильное значение в поле `grant_type`
 */
    public string $error_description;
}
