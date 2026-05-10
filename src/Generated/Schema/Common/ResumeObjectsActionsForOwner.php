<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsActionsForOwner.
 */
class ResumeObjectsActionsForOwner extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['download' => 'download'];

    protected const REQUIRED_FIELDS = ['download'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['download' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload Ссылки для скачивания резюме в нескольких форматах ([подробнее](#tag/Prosmotr-rezyume/operation/get-resume)) (атрибут 'actions')
 */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload $download;
}
