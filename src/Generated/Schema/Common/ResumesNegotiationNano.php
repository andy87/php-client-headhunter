<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumesNegotiationNano.
 */
class ResumesNegotiationNano extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['created_at' => 'created_at', 'employer_state' => 'employer_state'];

    protected const REQUIRED_FIELDS = ['employer_state', 'created_at'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['employer_state' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var string Дата изменения состояния отклика/приглашения */
    public string $created_at;

    /** @var array<string, mixed> Schema field employer_state */
    public array $employer_state;
}
