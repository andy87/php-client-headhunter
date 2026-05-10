<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter UserStatusesApplicant.
 */
class UserStatusesApplicant extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['job_search_status' => 'job_search_status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['job_search_status' => \Andy87\ClientsHh\Generated\Schema\Common\UserStatusesJobSearchStatus::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\UserStatusesJobSearchStatus|null Schema field job_search_status */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\UserStatusesJobSearchStatus $job_search_status = null;
}
