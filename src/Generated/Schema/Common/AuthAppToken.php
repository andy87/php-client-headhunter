<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter AuthAppToken.
 */
class AuthAppToken extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['access_token' => 'access_token', 'token_type' => 'token_type'];

    protected const REQUIRED_FIELDS = ['access_token', 'token_type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field access_token */
    public string $access_token;

    /** @var string Тип выданного токена. Всегда принимает значение `bearer` */
    public string $token_type;
}
