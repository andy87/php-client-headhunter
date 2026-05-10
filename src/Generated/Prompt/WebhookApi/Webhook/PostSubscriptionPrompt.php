<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\WebhookApi\Webhook;

use Andy87\ClientsHh\Generated\Prompt\PostWebhookSubscriptionPrompt as BasePostWebhookSubscriptionPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /webhook/subscriptions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/post-webhook-subscription
 *
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 * @property array<int, mixed> $actions Cписок событий
 * @property string $url URL, на который будет отправляться POST запрос при наступлении события
 */
class PostSubscriptionPrompt extends BasePostWebhookSubscriptionPrompt
{
}
