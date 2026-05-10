<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ОткликиПриглашенияРаботодателя;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetPrefNegotiationsOrderPrompt;
use Andy87\ClientsHh\Generated\Prompt\PutPrefNegotiationsOrderPrompt;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Pref\GetNegotiationsOrderResponse;
use Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Pref\PutNegotiationsOrderResponse;

/**
 * Группа методов "pref" раздела HeadHunter API "Отклики/приглашения работодателя".
 */
class PrefProvider extends BaseHhProvider
{
    /**
     * Просмотр предпочитаемой сортировки откликов
     *
     * OperationId: get-pref-negotiations-order.
     * HTTP: GET /vacancies/{id}/preferred_negotiations_order.
     *
     * @param GetPrefNegotiationsOrderPrompt $prompt DTO запроса.
     *
     * @return GetNegotiationsOrderResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getNegotiationsOrder(GetPrefNegotiationsOrderPrompt $prompt): GetNegotiationsOrderResponse
    {
        /** @var GetNegotiationsOrderResponse $response */
        $response = $this->request($prompt, GetNegotiationsOrderResponse::class);

        return $response;
    }

    /**
     * Изменение предпочитаемой сортировки откликов
     *
     * OperationId: put-pref-negotiations-order.
     * HTTP: PUT /vacancies/{id}/preferred_negotiations_order.
     *
     * @param PutPrefNegotiationsOrderPrompt $prompt DTO запроса.
     *
     * @return PutNegotiationsOrderResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putNegotiationsOrder(PutPrefNegotiationsOrderPrompt $prompt): PutNegotiationsOrderResponse
    {
        /** @var PutNegotiationsOrderResponse $response */
        $response = $this->request($prompt, PutNegotiationsOrderResponse::class);

        return $response;
    }
}
