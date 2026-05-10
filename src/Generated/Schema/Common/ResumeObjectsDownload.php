<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsDownload.
 */
class ResumeObjectsDownload extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['pdf' => 'pdf', 'rtf' => 'rtf'];

    protected const REQUIRED_FIELDS = ['pdf', 'rtf'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['pdf' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf::class, 'rtf' => \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf PDF-версия резюме */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf $pdf;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf RTF-версия резюме */
    public \and_y87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf $rtf;
}
