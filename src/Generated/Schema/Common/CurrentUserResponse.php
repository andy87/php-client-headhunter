<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter CurrentUserResponse.
 */
class CurrentUserResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'email' => 'email'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = ['email'];

    protected const CASTS = [];

    /** @var string User ID. */
    public string $id;

    /** @var string|null User email. */
    public ?string $email = null;
}
