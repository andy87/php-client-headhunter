<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsSite.
 */
class ResumeObjectsSite extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'url' => 'url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['url'];

    protected const CASTS = ['type' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Тип профиля. Элемент справочника [resume_contacts_site_type](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $type = null;

    /** @var string|null Ссылка на профиль или идентификатор */
    public ?string $url = null;
}
