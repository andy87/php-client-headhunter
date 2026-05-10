<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ОткликиПриглашенияРаботодателя;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\ChangeNegotiationActionPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationMessageTemplatesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationTestResultsPrompt;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Negotiation\ChangeActionResponse;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Negotiation\GetMessageTemplatesResponse;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Negotiation\GetTestResultsResponse;

/**
 * Группа методов "negotiation" раздела HeadHunter API "Отклики/приглашения работодателя".
 */
class NegotiationProvider extends BaseHhProvider
{
    /**
     * Действия по отклику/приглашению коллекции
     *
     * Запрос изменяет состояние работодательского (`employer_state`) или соискательского (`state`) состояния отклика/приглашения.
     *
     * #### Смена работодательского состояния отклика/приглашения
     *
     * > Доступные действия для каждого отклика/приглашения перечислены в массиве `employer_states` [списка откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations).
     *
     * Чтобы изменить состояние отклика, выполните запрос из параметра `actions[].url` [списка откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-collection-negotiations-list) для выбранного действия над откликом.
     * В запросе необходимо передать аргументы массива `actions[].arguments` в формате `application/x-www-form-urlencoded`.
     *
     * Примеры действий:
     *
     * * отложить отклик;
     * * пригласить соискателя на интервью в ответ на отклик;
     * * отказать соискателю.
     *
     * #### Смена соискательского состояния отклика/приглашения
     *
     * Изменение соискательского состояния отклика/приглашения влияет на [статистику по работе с откликами](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations-statistics-employer).
     *
     * Условие смены соискательского состояния отклика/приглашения — отправка сообщения соискателю любым из способов:
     *
     * - Совершить действие с откликом/приглашением, используя метод `/negotiations/{collection_name}/{nid}`, с сопроводительным сообщением.
     * - [Отправить сообщение](#tag/Otklikipriglasheniya-rabotodatelya/operation/send-negotiation-message) в отклике. Статус изменится, если перед отправкой использовался метод изменения работодательского статуса без сопроводительного сообщения.
     *
     * Соискательский статус в обоих случаях изменится или на приглашение (`invitation`), или на отказ (`discard`)
     *
     * OperationId: change-negotiation-action.
     * HTTP: PUT /negotiations/{collection_name}/{nid}.
     *
     * @param ChangeNegotiationActionPrompt $prompt DTO запроса.
     *
     * @return ChangeActionResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function changeAction(ChangeNegotiationActionPrompt $prompt): ChangeActionResponse
    {
        /** @var ChangeActionResponse $response */
        $response = $this->request($prompt, ChangeActionResponse::class);

        return $response;
    }

    /**
     * Список шаблонов ответов для отклика/приглашения
     *
     * Метод требует наличия [платного доступа для работодателя](#operation/get-payable-api-method-access).
     *
     * Возвращает список шаблонов ответов для отклика/приглашения или резюме. Может использоваться в отправляемых соискателю приглашениях на вакансию или [действиях по откликам/приглашениям](#tag/Otklikipriglasheniya-rabotodatelya/operation/put-negotiations-collection-to-next-state).
     *
     * > Количество доступных шаблонов будет зависеть от конкретного отклика/приглашения или вакансии и их статусов.
     *
     * Рекомендуется использовать URL из поля `templates.url` в [списке откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations). Примеры:
     *
     * ```
     * GET /message_templates/{template}?topic_id={topic_id}
     * GET /message_templates/{template}?vacancy_id={vacancy_id}&resume_id={resume_id}
     * ```
     *
     * OperationId: get-negotiation-message-templates.
     * HTTP: GET /message_templates/{template}.
     *
     * @param GetNegotiationMessageTemplatesPrompt $prompt DTO запроса.
     *
     * @return GetMessageTemplatesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getMessageTemplates(GetNegotiationMessageTemplatesPrompt $prompt): GetMessageTemplatesResponse
    {
        /** @var GetMessageTemplatesResponse $response */
        $response = $this->request($prompt, GetMessageTemplatesResponse::class);

        return $response;
    }

    /**
     * Получить результаты тестов, прикрепленных к вакансии
     *
     * Запрос возвращает информацию о пройденных тестах откликнувшегося соискателя
     *
     * OperationId: get-negotiation-test-results.
     * HTTP: GET /negotiations/{nid}/test/solution.
     *
     * @param GetNegotiationTestResultsPrompt $prompt DTO запроса.
     *
     * @return GetTestResultsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getTestResults(GetNegotiationTestResultsPrompt $prompt): GetTestResultsResponse
    {
        /** @var GetTestResultsResponse $response */
        $response = $this->request($prompt, GetTestResultsResponse::class);

        return $response;
    }
}
