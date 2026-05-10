<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SavedSearchesSavedSearchItem.
 */
class SavedSearchesSavedSearchItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['created_at' => 'created_at', 'id' => 'id', 'items' => 'items', 'name' => 'name', 'new_items' => 'new_items', 'subscription' => 'subscription'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'created_at', 'subscription', 'items', 'new_items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesCountUrl::class, 'new_items' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesCountUrl::class];

    /** @var string Дата и время создания */
    public string $created_at;

    /** @var string Идентификатор поиска */
    public string $id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesCountUrl Schema field items */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesCountUrl $items;

    /** @var string Название поиска */
    public string $name;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesCountUrl Schema field new_items */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesCountUrl $new_items;

    /** @var bool Статус подписки */
    public bool $subscription;
}
