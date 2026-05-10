<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /webhook/subscriptions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-webhook-subscriptions
 */
class GetWebhookSubscriptionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\WebhookSubscriptionItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\WebhookSubscriptionsOutput::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\WebhookSubscriptionItem> Cписок подписок пользователя */
    public array $items;
}
