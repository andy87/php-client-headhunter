<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesLinks.
 */
class IncludesLinks extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['android' => 'android', 'ios' => 'ios', 'web' => 'web'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Schema field android */
    public ?string $android = null;

    /** @var string|null Schema field ios */
    public ?string $ios = null;

    /** @var string|null Schema field web */
    public ?string $web = null;
}
