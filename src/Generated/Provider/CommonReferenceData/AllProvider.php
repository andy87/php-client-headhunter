<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\CommonReferenceData;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetAllDistrictsPrompt;
use and_y87\ClientsHh\Generated\Response\CommonReferenceData\All\GetDistrictsResponse;

/**
 * Группа методов "all" раздела HeadHunter API "Общие справочники".
 */
class AllProvider extends BaseHhProvider
{
    /**
     * Список районов во всех городах
     *
     * OperationId: get-all-districts.
     * HTTP: GET /districts.
     *
     * @param GetAllDistrictsPrompt $prompt DTO запроса.
     *
     * @return GetDistrictsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getDistricts(GetAllDistrictsPrompt $prompt): GetDistrictsResponse
    {
        /** @var GetDistrictsResponse $response */
        $response = $this->request($prompt, GetDistrictsResponse::class);

        return $response;
    }
}
