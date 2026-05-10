<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter AuthMethodsSocialNetwork.
 */
class AuthMethodsSocialNetwork extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Id соцсети (vk, ok, esia, gplus, mail) */
    public string $id;

    /** @var string Название соцсети */
    public string $name;
}
