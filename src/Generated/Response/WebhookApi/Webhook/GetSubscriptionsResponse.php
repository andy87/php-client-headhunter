<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\WebhookApi\Webhook;

use Andy87\ClientsHh\Generated\Response\GetWebhookSubscriptionsResponse as BaseGetWebhookSubscriptionsResponse;

/**
 * Ответ HeadHunter API [GET] /webhook/subscriptions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-webhook-subscriptions
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\WebhookSubscriptionItem> $items Cписок подписок пользователя
 */
class GetSubscriptionsResponse extends BaseGetWebhookSubscriptionsResponse
{
}
