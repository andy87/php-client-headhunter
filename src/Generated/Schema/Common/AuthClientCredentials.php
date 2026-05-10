<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter AuthClientCredentials.
 */
class AuthClientCredentials extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['client_id' => 'client_id', 'client_secret' => 'client_secret', 'grant_type' => 'grant_type'];

    protected const REQUIRED_FIELDS = ['grant_type', 'client_id', 'client_secret'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор, полученный при [создании приложения](https://dev.hh.ru/admin) */
    public string $client_id;

    /** @var string Защищенный ключ, полученный при [создании приложения](https://dev.hh.ru/admin) */
    public string $client_secret;

    /** @var string Cпособ запроса токена */
    public string $grant_type;
}
