<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationsOrderTypes.
 */
class NegotiationsNegotiationsOrderTypes extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Уникальный идентификатор варианта сортировки */
    public string $id;

    /** @var string Название варианта сортировки */
    public string $name;

    /** @var string URL на коллекцию откликов/приглашений, отсортированных текущим вариантом */
    public string $url;
}
