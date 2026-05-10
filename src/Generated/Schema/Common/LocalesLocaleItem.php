<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter LocalesLocaleItem.
 */
class LocalesLocaleItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'current' => 'current'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'current'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор локали */
    public string $id;

    /** @var string Имя локали */
    public string $name;

    /** @var bool Для текущей локали `true` , `false` для остальных */
    public bool $current;
}
