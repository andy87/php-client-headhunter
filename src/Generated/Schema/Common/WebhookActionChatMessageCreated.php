<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookActionChatMessageCreated.
 */
class WebhookActionChatMessageCreated extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Создание сообщения в чате. Событие присылается менеджеру работодателя по тем чатам, в которых он является активным участником
 */
    public string $type;
}
