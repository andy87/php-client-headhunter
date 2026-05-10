<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\EmployerNegotiations;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetCollectionNegotiationsListPrompt;
use and_y87\ClientsHh\Generated\Response\EmployerNegotiations\Collection\GetNegotiationsListResponse;

/**
 * Группа методов "collection" раздела HeadHunter API "Отклики/приглашения работодателя".
 */
class CollectionProvider extends BaseHhProvider
{
    /**
     * Список откликов/приглашений коллекции
     *
     * Возвращает список откликов/приглашений для заданной коллекции. URL для запроса необходимо брать из поля `collections[].url` [списка коллекций](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations).
     *
     * > Вместо `response` необходимо указывать параметр `{collection_name}` — название коллекции. Возможные значения указаны в поле `collections[].id` [списка коллекций](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations).
     *
     * В ответе будет только основная информация о резюме. Чтобы получить дополнительную информацию, например, контактный телефон, необходимо [запросить полное резюме](#tag/Upravlenie-vakansiyami/operation/get-vacancy).
     *
     * Некоторые параметры запроса могут принимать множественные значения: `key=value&key=value`. Если параметр может принимать несколько значений, об этом явно указано в его описании. Неизвестные параметры и параметры с ошибкой в названии игнорируются.
     *
     * > Коллекция `phone_calls` принимает только параметры `vacancy_id`, `order_by`, `page` и `per_page`
     *
     * OperationId: get-collection-negotiations-list.
     * HTTP: GET /negotiations/response.
     *
     * @param GetCollectionNegotiationsListPrompt $prompt DTO запроса.
     *
     * @return GetNegotiationsListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getNegotiationsList(GetCollectionNegotiationsListPrompt $prompt): GetNegotiationsListResponse
    {
        /** @var GetNegotiationsListResponse $response */
        $response = $this->request($prompt, GetNegotiationsListResponse::class);

        return $response;
    }
}
