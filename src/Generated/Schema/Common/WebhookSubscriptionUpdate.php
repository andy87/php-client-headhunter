<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookSubscriptionUpdate.
 */
class WebhookSubscriptionUpdate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actions' => 'actions', 'url' => 'url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, mixed>|null Cписок событий, на которые нужно подписаться */
    public ?array $actions = null;

    /** @var string|null URL, на который будет отправляться POST запрос при наступлении события */
    public ?string $url = null;
}
