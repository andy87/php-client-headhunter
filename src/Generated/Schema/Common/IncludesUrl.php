<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesUrl.
 */
class IncludesUrl extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['url' => 'url'];

    protected const REQUIRED_FIELDS = ['url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Ссылка на получение элементов */
    public string $url;
}
