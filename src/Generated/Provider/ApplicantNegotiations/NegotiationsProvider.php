<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ApplicantNegotiations;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetNegotiationsPrompt;
use Andy87\ClientsHh\Generated\Response\ApplicantNegotiations\Negotiations\GetResponse;

/**
 * Группа методов "negotiations" раздела HeadHunter API "Переписка (отклики/приглашения) для соискателя".
 */
class NegotiationsProvider extends BaseHhProvider
{
    /**
     * Список откликов/приглашений
     *
     * Возвращает список коллекций откликов/приглашений по [вакансии](#tag/Upravlenie-vakansiyami/operation/get-active-vacancy-list) работодателя.
     *
     * По умолчанию отклики сортируются по дате последнего обновления — от новых к старым.
     *
     * Чтобы получить список активных откликов, передайте в запросе параметр `?status=active`
     *
     * OperationId: get-negotiations.
     * HTTP: GET /negotiations.
     *
     * @param GetNegotiationsPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetNegotiationsPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
