<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter AuthUserToken.
 */
class AuthUserToken extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['access_token' => 'access_token', 'expires_in' => 'expires_in', 'refresh_token' => 'refresh_token', 'token_type' => 'token_type'];

    protected const REQUIRED_FIELDS = ['access_token', 'token_type', 'expires_in', 'refresh_token'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Токен, который возвращается при условии, если у приложения есть права на создание долгоживущих или короткоживущих токенов
 */
    public string $access_token;

    /** @var int Время жизни токена в секундах */
    public int $expires_in;

    /** @var string Токен, который можно использовать для продления срока жизни соответствующего access токена */
    public string $refresh_token;

    /** @var string Тип выданного токена. Всегда принимает значение `bearer` */
    public string $token_type;
}
