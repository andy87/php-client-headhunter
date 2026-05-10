<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesLanguageProperties.
 */
class IncludesLanguageProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'level' => 'level'];

    protected const REQUIRED_FIELDS = ['id', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['level' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var string Идентификатор */
    public string $id;

    /** @var string Название */
    public string $name;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Уровень владения. Возможные значения элементов приведены в поле `language_level` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $level = null;
}
