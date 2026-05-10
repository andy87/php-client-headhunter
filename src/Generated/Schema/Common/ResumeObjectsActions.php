<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsActions.
 */
class ResumeObjectsActions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['download' => 'download', 'download_with_contact' => 'download_with_contact', 'get_with_contact' => 'get_with_contact'];

    protected const REQUIRED_FIELDS = ['download'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['download' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload::class, 'download_with_contact' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfDownloadOrNullableObject::class, 'get_with_contact' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfUrlOrNullableObject::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload Ссылки для скачивания резюме в нескольких форматах ([подробнее](#tag/Prosmotr-rezyume/operation/get-resume)) (атрибут 'actions')
 */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownload $download;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfDownloadOrNullableObject|null Schema field download_with_contact */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfDownloadOrNullableObject $download_with_contact = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfUrlOrNullableObject|null Schema field get_with_contact */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsOneOfUrlOrNullableObject $get_with_contact = null;
}
