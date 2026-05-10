<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonDisplayInfo.
 */
class ChatsCommonDisplayInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['icon' => 'icon', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['title', 'icon'];

    protected const NULLABLE_FIELDS = ['icon'];

    protected const CASTS = [];

    /** @var string|null Url иконки чата */
    public ?string $icon;

    /** @var string Наименование чата */
    public string $title;
}
