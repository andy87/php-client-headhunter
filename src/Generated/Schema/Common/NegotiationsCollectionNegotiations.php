<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsCollectionNegotiations.
 */
class NegotiationsCollectionNegotiations extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['hidden_count' => 'hidden_count', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = ['hidden_count'];

    protected const CASTS = [];

    /** @var int|null Количество скрытых откликов/приглашений */
    public ?int $hidden_count = null;

    /** @var array<int, mixed> Schema field items */
    public array $items;
}
