<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesSkillSetItem.
 */
class IncludesSkillSetItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'text' => 'text'];

    protected const REQUIRED_FIELDS = ['id', 'text'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор ключевого навыка */
    public string $id;

    /** @var string Название ключевого навыка */
    public string $text;
}
