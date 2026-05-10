<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsCertificate.
 */
class ResumeObjectsCertificate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['achieved_at' => 'achieved_at', 'owner' => 'owner', 'title' => 'title', 'type' => 'type', 'url' => 'url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['owner', 'url'];

    protected const CASTS = [];

    /** @var string|null Дата получения (в формате `ГГГГ-ММ-ДД`) */
    public ?string $achieved_at = null;

    /** @var string|null На кого выдан сертификат. Возвращается только для сертификатов с `type = microsoft` */
    public ?string $owner = null;

    /** @var string|null Название сертификата */
    public ?string $title = null;

    /** @var string|null Тип сертификата. Доступные значения:

* `custom`;
* `microsoft`
 */
    public ?string $type = null;

    /** @var string|null Ссылка на страницу с описанием сертификата */
    public ?string $url = null;
}
