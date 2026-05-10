<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsCompanyItem.
 */
class SuggestsCompanyItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'logo_urls' => 'logo_urls', 'text' => 'text', 'url' => 'url', 'area' => 'area', 'industries' => 'industries'];

    protected const REQUIRED_FIELDS = ['id', 'text', 'area'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['logo_urls' => \and_y87\ClientsHh\Generated\Schema\Common\SuggestsLogoUrl::class, 'area' => \and_y87\ClientsHh\Generated\Schema\Common\SuggestsArea::class, 'industries' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class]];

    /** @var string Идентификатор организации */
    public string $id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\SuggestsLogoUrl|null Ссылка на логотип организации */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\SuggestsLogoUrl $logo_urls = null;

    /** @var string Название организации */
    public string $text;

    /** @var string|null Сайт организации */
    public ?string $url = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\SuggestsArea Schema field area */
    public \and_y87\ClientsHh\Generated\Schema\Common\SuggestsArea $area;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName>|null Сферы деятельности */
    public ?array $industries = null;
}
