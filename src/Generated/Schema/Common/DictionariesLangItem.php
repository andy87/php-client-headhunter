<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesLangItem.
 */
class DictionariesLangItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'uid' => 'uid'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'uid'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор языка */
    public string $id;

    /** @var string Название языка */
    public string $name;

    /** @var string Универсальный идентификатор языка */
    public string $uid;
}
