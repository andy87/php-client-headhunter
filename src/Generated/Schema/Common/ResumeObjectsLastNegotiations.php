<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsLastNegotiations.
 */
class ResumeObjectsLastNegotiations extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['last_negotiation' => 'last_negotiation'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['last_negotiation'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ResumesNegotiationNano|null Информация о последнем статусе в истории откликов/приглашений */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\ResumesNegotiationNano $last_negotiation = null;
}
