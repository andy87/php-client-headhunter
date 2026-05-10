<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsDownload.
 */
class ResumeObjectsDownload extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['pdf' => 'pdf', 'rtf' => 'rtf'];

    protected const REQUIRED_FIELDS = ['pdf', 'rtf'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['pdf' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf::class, 'rtf' => \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf PDF-версия резюме */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf $pdf;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf RTF-версия резюме */
    public \Andy87\ClientsHh\Generated\Schema\Common\ResumeObjectsDownloadPdfRtf $rtf;
}
