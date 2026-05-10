<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsAreasItem.
 */
class SuggestsAreasItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'parent' => 'parent', 'text' => 'text', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'text', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['parent' => \Andy87\ClientsHh\Generated\Schema\Common\SuggestsAreasItem::class];

    /** @var string Идентификатор региона */
    public string $id;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\SuggestsAreasItem|null Родительский регион */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\SuggestsAreasItem $parent = null;

    /** @var string Название региона */
    public string $text;

    /** @var string URL региона */
    public string $url;
}
