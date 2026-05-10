<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesCountUrl.
 */
class IncludesCountUrl extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['count' => 'count', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['count', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Количество элементов */
    public float $count;

    /** @var string Ссылка на получение элементов */
    public string $url;
}
