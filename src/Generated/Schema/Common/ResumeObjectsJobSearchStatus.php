<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsJobSearchStatus.
 */
class ResumeObjectsJobSearchStatus extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['job_search_status' => 'job_search_status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['job_search_status'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime|null Информация о статусе поиска работы соискателем */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdNameLastChangeTime $job_search_status = null;
}
