<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsSearchKeywordItem.
 */
class SuggestsSearchKeywordItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['text' => 'text'];

    protected const REQUIRED_FIELDS = ['text'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Ключевое слово */
    public string $text;
}
