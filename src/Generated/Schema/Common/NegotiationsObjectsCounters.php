<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsObjectsCounters.
 */
class NegotiationsObjectsCounters extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['messages' => 'messages', 'unread_messages' => 'unread_messages'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Общее количество сообщений */
    public ?float $messages = null;

    /** @var float|null Количество непрочитанных работодателем сообщений */
    public ?float $unread_messages = null;
}
