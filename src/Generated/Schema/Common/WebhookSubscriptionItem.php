<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookSubscriptionItem.
 */
class WebhookSubscriptionItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actions' => 'actions', 'url' => 'url', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['url', 'actions', 'id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, mixed> Cписок событий */
    public array $actions;

    /** @var string URL, на который будет отправляться POST запрос при наступлении события */
    public string $url;

    /** @var string Идентификатор подписки */
    public string $id;
}
