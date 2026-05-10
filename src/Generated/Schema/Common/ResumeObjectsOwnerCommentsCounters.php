<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsOwnerCommentsCounters.
 */
class ResumeObjectsOwnerCommentsCounters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['total' => 'total'];

    protected const REQUIRED_FIELDS = ['total'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Общее количество комментариев */
    public float $total;
}
