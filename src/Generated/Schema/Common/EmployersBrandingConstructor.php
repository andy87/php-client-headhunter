<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersBrandingConstructor.
 */
class EmployersBrandingConstructor extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['constructor' => 'constructor'];

    protected const REQUIRED_FIELDS = ['type', 'constructor'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field constructor */
    public array $constructor;
}
