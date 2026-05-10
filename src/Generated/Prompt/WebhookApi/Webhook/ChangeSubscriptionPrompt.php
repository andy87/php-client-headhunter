<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\WebhookApi\Webhook;

use Andy87\ClientsHh\Generated\Prompt\ChangeWebhookSubscriptionPrompt as BaseChangeWebhookSubscriptionPrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /webhook/subscriptions/{subscription_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/change-webhook-subscription
 *
 * @property string $subscription_id Идентификатор подписки
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property array<int, mixed>|null $actions Cписок событий, на которые нужно подписаться
 * @property string|null $url URL, на который будет отправляться POST запрос при наступлении события
 */
class ChangeSubscriptionPrompt extends BaseChangeWebhookSubscriptionPrompt
{
}
