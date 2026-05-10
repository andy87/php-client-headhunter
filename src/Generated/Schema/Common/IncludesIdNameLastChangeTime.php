<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesIdNameLastChangeTime.
 */
class IncludesIdNameLastChangeTime extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'last_change_time' => 'last_change_time'];

    protected const REQUIRED_FIELDS = ['id', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор */
    public string $id;

    /** @var string Название */
    public string $name;

    /** @var string|null Время последнего изменения */
    public ?string $last_change_time = null;
}
