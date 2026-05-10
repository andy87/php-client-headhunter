<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter AuthRefreshToken.
 */
class AuthRefreshToken extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['grant_type' => 'grant_type', 'refresh_token' => 'refresh_token'];

    protected const REQUIRED_FIELDS = ['grant_type', 'refresh_token'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Cпособ запроса токена */
    public string $grant_type;

    /** @var string Refresh-токен, полученный ранее при [получении пары токенов](#section/Avtorizaciya/Obnovlenie-pary-access-i-refresh-tokenov) или прошлом обновлении пары */
    public string $refresh_token;
}
