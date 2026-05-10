<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesIdNameUid.
 */
class IncludesIdNameUid extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'uid' => 'uid'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'uid'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор */
    public string $id;

    /** @var string Название */
    public string $name;

    /** @var string Универсальный идентификатор */
    public string $uid;
}
