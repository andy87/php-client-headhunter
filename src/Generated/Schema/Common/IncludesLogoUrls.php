<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesLogoUrls.
 */
class IncludesLogoUrls extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['n90' => '90', 'n240' => '240', 'original' => 'original'];

    protected const REQUIRED_FIELDS = ['original'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null URL логотипа с размером менее 90px по меньшей стороне */
    public ?string $n90 = null;

    /** @var string|null URL логотипа с размером менее 240px по меньшей стороне */
    public ?string $n240 = null;

    /** @var string URL необработанного логотипа */
    public string $original;
}
