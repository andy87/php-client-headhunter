<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsEmployerItem.
 */
class SuggestsEmployerItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'logo_urls' => 'logo_urls', 'text' => 'text', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'text'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['logo_urls' => \and_y87\ClientsHh\Generated\Schema\Common\SuggestsLogoUrl::class];

    /** @var string Идентификатор организации */
    public string $id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\SuggestsLogoUrl|null Ссылка на логотип организации */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\SuggestsLogoUrl $logo_urls = null;

    /** @var string Название организации */
    public string $text;

    /** @var string|null Сайт организации */
    public ?string $url = null;
}
