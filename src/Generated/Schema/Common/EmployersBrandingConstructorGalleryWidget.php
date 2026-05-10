<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersBrandingConstructorGalleryWidget.
 */
class EmployersBrandingConstructorGalleryWidget extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>> Список изображений в галерее */
    public array $items;

    /** @var string Для галереи это значение равно 'gallery' */
    public string $type;
}
