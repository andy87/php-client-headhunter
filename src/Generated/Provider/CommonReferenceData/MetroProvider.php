<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\CommonReferenceData;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetMetroStationsInCityPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetMetroStationsPrompt;
use Andy87\ClientsHh\Generated\Response\CommonReferenceData\Metro\GetStationsInCityResponse;
use Andy87\ClientsHh\Generated\Response\CommonReferenceData\Metro\GetStationsResponse;

/**
 * Группа методов "metro" раздела HeadHunter API "Общие справочники".
 */
class MetroProvider extends BaseHhProvider
{
    /**
     * Список станций метро во всех городах
     *
     * OperationId: get-metro-stations.
     * HTTP: GET /metro.
     *
     * @param GetMetroStationsPrompt $prompt DTO запроса.
     *
     * @return GetStationsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStations(GetMetroStationsPrompt $prompt): GetStationsResponse
    {
        /** @var GetStationsResponse $response */
        $response = $this->request($prompt, GetStationsResponse::class);

        return $response;
    }

    /**
     * Список станций метро в указанном городе
     *
     * OperationId: get-metro-stations-in-city.
     * HTTP: GET /metro/{city_id}.
     *
     * @param GetMetroStationsInCityPrompt $prompt DTO запроса.
     *
     * @return GetStationsInCityResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStationsInCity(GetMetroStationsInCityPrompt $prompt): GetStationsInCityResponse
    {
        /** @var GetStationsInCityResponse $response */
        $response = $this->request($prompt, GetStationsInCityResponse::class);

        return $response;
    }
}
