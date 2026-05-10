<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Подсказки;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetAreasSuggestsPrompt;
use Andy87\ClientsHh\Generated\Response\Подсказки\Areas\GetSuggestsResponse;

/**
 * Группа методов "areas" раздела HeadHunter API "Подсказки".
 */
class AreasProvider extends BaseHhProvider
{
    /**
     * Подсказки по регионам
     *
     * Также доступна загрузка [полного дерева регионов](#tag/Obshie-spravochniki/operation/get-areas) и [части дерева от определенного элемента](#tag/Obshie-spravochniki/operation/get-areas-from-specified)
     *
     * OperationId: get-areas-suggests.
     * HTTP: GET /suggests/areas.
     *
     * @param GetAreasSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSuggests(GetAreasSuggestsPrompt $prompt): GetSuggestsResponse
    {
        /** @var GetSuggestsResponse $response */
        $response = $this->request($prompt, GetSuggestsResponse::class);

        return $response;
    }
}
