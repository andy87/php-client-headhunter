<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsSite.
 */
class ResumeObjectsSite extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'url' => 'url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['url'];

    protected const CASTS = ['type' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Тип профиля. Элемент справочника [resume_contacts_site_type](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $type = null;

    /** @var string|null Ссылка на профиль или идентификатор */
    public ?string $url = null;
}
