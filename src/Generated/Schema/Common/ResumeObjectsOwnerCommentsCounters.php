<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

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
