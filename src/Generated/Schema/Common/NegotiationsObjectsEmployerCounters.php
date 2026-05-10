<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsObjectsEmployerCounters.
 */
class NegotiationsObjectsEmployerCounters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['total' => 'total', 'with_updates' => 'with_updates'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Общее количество откликов/приглашений в коллекции */
    public ?int $total = null;

    /** @var int|null Количество откликов/приглашений в коллекции, требующих внимания */
    public ?int $with_updates = null;
}
