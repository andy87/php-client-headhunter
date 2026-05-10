<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\CancelWebhookSubscriptionPrompt;
use Andy87\ClientsHh\Generated\Prompt\ChangeWebhookSubscriptionPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetWebhookSubscriptionsPrompt;
use Andy87\ClientsHh\Generated\Prompt\PostWebhookSubscriptionPrompt;
use Andy87\ClientsHh\Generated\Response\CancelWebhookSubscriptionResponse;
use Andy87\ClientsHh\Generated\Response\ChangeWebhookSubscriptionResponse;
use Andy87\ClientsHh\Generated\Response\GetWebhookSubscriptionsResponse;
use Andy87\ClientsHh\Generated\Response\PostWebhookSubscriptionResponse;

/**
 * Provider раздела HeadHunter API "Webhook API".
 * @property-read WebhookApi\WebhookProvider $webhook
 *
 */
class WebhookApiProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'webhook' => WebhookApi\WebhookProvider::class,
    ];

    /**
     * Удалить подписку на уведомление
     *
     * OperationId: cancel-webhook-subscription.
     * HTTP: DELETE /webhook/subscriptions/{subscription_id}.
     *
     * @param CancelWebhookSubscriptionPrompt $prompt DTO запроса.
     *
     * @return CancelWebhookSubscriptionResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function cancelWebhookSubscription(CancelWebhookSubscriptionPrompt $prompt): CancelWebhookSubscriptionResponse
    {
        /** @var WebhookApi\WebhookProvider $group */
        $group = $this->operationGroup('webhook');

        return $group->cancelSubscription($prompt);
    }

    /**
     * Изменить подписку на уведомления
     *
     * Обновить можно как каждое поле по отдельности (в таком случае нужно отправить только обновляемое поле), так и несколько полей одновременно. Для обновления `actions` нужно передать полный список типов событий, по которым будут формироваться уведомления. Переданные типы событий не добавляются к типам событий, на которые пользователь уже подписан.
     * Пустой список `actions` передать нельзя
     *
     * OperationId: change-webhook-subscription.
     * HTTP: PUT /webhook/subscriptions/{subscription_id}.
     *
     * @param ChangeWebhookSubscriptionPrompt $prompt DTO запроса.
     *
     * @return ChangeWebhookSubscriptionResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function changeWebhookSubscription(ChangeWebhookSubscriptionPrompt $prompt): ChangeWebhookSubscriptionResponse
    {
        /** @var WebhookApi\WebhookProvider $group */
        $group = $this->operationGroup('webhook');

        return $group->changeSubscription($prompt);
    }

    /**
     * Получить список уведомлений, на которые подписан пользователь
     *
     * OperationId: get-webhook-subscriptions.
     * HTTP: GET /webhook/subscriptions.
     *
     * @param GetWebhookSubscriptionsPrompt $prompt DTO запроса.
     *
     * @return GetWebhookSubscriptionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getWebhookSubscriptions(GetWebhookSubscriptionsPrompt $prompt): GetWebhookSubscriptionsResponse
    {
        /** @var WebhookApi\WebhookProvider $group */
        $group = $this->operationGroup('webhook');

        return $group->getSubscriptions($prompt);
    }

    /**
     * Подписаться на уведомления
     *
     * В рамках одного приложения пользователь может получать уведомления только на 1 url:
     * нельзя подписаться разными действиями на разные урлы.
     * После наступления события будет отправлен POST-запрос на указанный URL c json телом (**см. раздел "Callbacks"**).
     *
     * В ответ на POST-запрос ожидается ответ с кодом `2хх Success`, если сообщение принято, или `409 Conflict`, если пришел дубликат.
     * Для определения дубликатов нужно использовать id из запроса - уникальный идентификатор для пары "пользователь + приложение" в рамках одного типа события в подписке.
     *
     * Дубликаты возможны, если:
     * * url, на который отправлялся колбэк, не ответил в течение 2 секунд;
     * * сервер не смог установить соединение с url, на который необходимо отправить колбэк;
     * * url ответил неожиданным кодом (отличным от `2xx Success` или `409 Conflict`)
     *
     * В этих случаях сервер планирует повторную отправку колбэка, с постепенно увеличивающимся промежутком между переотправками.
     *
     * Если в рамках одной подписки ожидаемые ответы не поступают долгое время,
     * на почту разработчика приложения будет отправлено уведомительное письмо, подписка попадает в очередь на блокировку, а отправки прекращаются.
     *
     * Если до блокировки приложения в рамках подписки url ответит ожидаемым кодом в установленный таймаут, подписка исключается из очереди на блокировку.
     *
     * При удалении приложения владельцем или отзыве пользователем доступа у приложения все подписки на уведомления удаляются.
     * После восстановления доступа необходимо оформить новую подписку.
     *
     * Вебхуки не являются средствами гарантированной доставки. Мы отправляем все сообщения, но не гарантируем, что адресат их получит
     *
     * Структура и содержимое колбэков описаны в разделе [callbacks](#callbacks)
     *
     * OperationId: post-webhook-subscription.
     * HTTP: POST /webhook/subscriptions.
     *
     * @param PostWebhookSubscriptionPrompt $prompt DTO запроса.
     *
     * @return PostWebhookSubscriptionResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postWebhookSubscription(PostWebhookSubscriptionPrompt $prompt): PostWebhookSubscriptionResponse
    {
        /** @var WebhookApi\WebhookProvider $group */
        $group = $this->operationGroup('webhook');

        return $group->postSubscription($prompt);
    }
}
