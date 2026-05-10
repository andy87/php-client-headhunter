<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsSearchKeyword.
 */
class SuggestsSearchKeyword extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items', 'suggest_id' => 'suggest_id'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem> Schema field items */
    public array $items;

    /** @var string|null Schema field suggest_id */
    public ?string $suggest_id = null;
}
