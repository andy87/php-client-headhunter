<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\WebhookApi\Webhook;

use and_y87\ClientsHh\Generated\Response\GetWebhookSubscriptionsResponse as BaseGetWebhookSubscriptionsResponse;

/**
 * Ответ HeadHunter API [GET] /webhook/subscriptions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-webhook-subscriptions
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\WebhookSubscriptionItem> $items Cписок подписок пользователя
 */
class GetSubscriptionsResponse extends BaseGetWebhookSubscriptionsResponse
{
}
