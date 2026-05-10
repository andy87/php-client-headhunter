<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\CommonDictionaries;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetCountriesPrompt;
use Andy87\ClientsHh\Generated\Response\CommonDictionaries\Countries\GetResponse;

/**
 * Группа методов "countries" раздела HeadHunter API "Общие справочники".
 */
class CountriesProvider extends BaseHhProvider
{
    /**
     * Справочник стран
     *
     * Возвращает подмножество регионов, являющихся странами
     *
     * OperationId: get-countries.
     * HTTP: GET /areas/countries.
     *
     * @param GetCountriesPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetCountriesPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
