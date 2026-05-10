<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ПерепискаОткликиПриглашенияДляСоискателя;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationItemPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationMessagesPrompt;
use Andy87\ClientsHh\Generated\Prompt\SendNegotiationMessagePrompt;
use Andy87\ClientsHh\Generated\Response\ПерепискаОткликиПриглашенияДляСоискателя\Negotiation\GetItemResponse;
use Andy87\ClientsHh\Generated\Response\ПерепискаОткликиПриглашенияДляСоискателя\Negotiation\GetMessagesResponse;
use Andy87\ClientsHh\Generated\Response\ПерепискаОткликиПриглашенияДляСоискателя\Negotiation\SendMessageResponse;

/**
 * Группа методов "negotiation" раздела HeadHunter API "Переписка (отклики/приглашения) для соискателя".
 */
class NegotiationProvider extends BaseHhProvider
{
    /**
     * Просмотр отклика/приглашения
     *
     * Запрос возвращает информацию об отклике/приглашении по его ID.
     *
     * Работодатель может получить URL для запроса из [списка откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-collection-negotiations-list) (поле `items[].url`)
     *
     * OperationId: get-negotiation-item.
     * HTTP: GET /negotiations/{id}.
     *
     * @param GetNegotiationItemPrompt $prompt DTO запроса.
     *
     * @return GetItemResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getItem(GetNegotiationItemPrompt $prompt): GetItemResponse
    {
        /** @var GetItemResponse $response */
        $response = $this->request($prompt, GetItemResponse::class);

        return $response;
    }

    /**
     * Просмотр списка сообщений в отклике/приглашении
     *
     * Запрос возвращает список всех сообщений выбранного отклика/приглашения. Работодатель может посмотреть список по URL, указанному в поле `messages` [списка откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations) или в [отдельном отклике](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiation-item).
     *
     * Типы сообщений:
     *
     * * сопроводительное письмо соискателя;
     * * сопроводительное письмо работодателя при смене статуса отклика;
     * * свободная переписка между соискателем и работодателем.
     *
     * ‼️ Методы устарели, и более не поддерживаются, необходимо использовать новые методы для работы с [чатами](#tag/Chaty)
     *
     * OperationId: get-negotiation-messages.
     * HTTP: GET /negotiations/{nid}/messages.
     *
     * @param GetNegotiationMessagesPrompt $prompt DTO запроса.
     *
     * @return GetMessagesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getMessages(GetNegotiationMessagesPrompt $prompt): GetMessagesResponse
    {
        /** @var GetMessagesResponse $response */
        $response = $this->request($prompt, GetMessagesResponse::class);

        return $response;
    }

    /**
     * Отправка нового сообщения
     *
     * Запрос отправляет новое сообщение в рамках переписки.
     *
     * Отправить новое сообщение можно, если:
     *
     * * Работодатель пригласил соискателя на вакансию.
     * * Соискатель оставил отклик на вакансию.
     *
     * Если вакансия была отправлена в архив или соискатель удалил резюме, переписка будет недоступна. Работодатель также может вручную отключить переписку для вакансии.
     *
     * ‼️ Методы устарели, и более не поддерживаются, необходимо использовать новые методы для работы с [чатами](#tag/Chaty)
     *
     * OperationId: send-negotiation-message.
     * HTTP: POST /negotiations/{nid}/messages.
     *
     * @param SendNegotiationMessagePrompt $prompt DTO запроса.
     *
     * @return SendMessageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function sendMessage(SendNegotiationMessagePrompt $prompt): SendMessageResponse
    {
        /** @var SendMessageResponse $response */
        $response = $this->request($prompt, SendMessageResponse::class);

        return $response;
    }
}
