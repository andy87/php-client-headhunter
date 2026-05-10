<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsLogoUrl.
 */
class SuggestsLogoUrl extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['n90' => '90', 'n240' => '240'];

    protected const REQUIRED_FIELDS = ['n90'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string URL логотипа маленького размера */
    public string $n90;

    /** @var string|null URL логотипа среднего размера */
    public ?string $n240 = null;
}
