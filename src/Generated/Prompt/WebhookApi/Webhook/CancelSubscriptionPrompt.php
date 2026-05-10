<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\WebhookApi\Webhook;

use Andy87\ClientsHh\Generated\Prompt\CancelWebhookSubscriptionPrompt as BaseCancelWebhookSubscriptionPrompt;

/**
 * Класс данных запроса HeadHunter API [DELETE] /webhook/subscriptions/{subscription_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/cancel-webhook-subscription
 *
 * @property string $subscription_id Идентификатор подписки
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class CancelSubscriptionPrompt extends BaseCancelWebhookSubscriptionPrompt
{
}
