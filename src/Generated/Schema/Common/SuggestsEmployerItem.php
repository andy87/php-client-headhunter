<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsEmployerItem.
 */
class SuggestsEmployerItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'logo_urls' => 'logo_urls', 'text' => 'text', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'text'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['logo_urls' => \Andy87\ClientsHh\Generated\Schema\Common\SuggestsLogoUrl::class];

    /** @var string Идентификатор организации */
    public string $id;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\SuggestsLogoUrl|null Ссылка на логотип организации */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\SuggestsLogoUrl $logo_urls = null;

    /** @var string Название организации */
    public string $text;

    /** @var string|null Сайт организации */
    public ?string $url = null;
}
