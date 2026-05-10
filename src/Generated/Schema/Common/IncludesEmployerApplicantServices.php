<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesEmployerApplicantServices.
 */
class IncludesEmployerApplicantServices extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['target_employer' => 'target_employer'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Услуга \"Хочу тут работать\" */
    public ?array $target_employer = null;
}
