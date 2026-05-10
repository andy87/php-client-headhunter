<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsSearchKeyword.
 */
class SuggestsSearchKeyword extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items', 'suggest_id' => 'suggest_id'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem> Schema field items */
    public array $items;

    /** @var string|null Schema field suggest_id */
    public ?string $suggest_id = null;
}
