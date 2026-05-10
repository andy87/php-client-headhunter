<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Подсказки;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetAreaLeavesSuggestsPrompt;
use Andy87\ClientsHh\Generated\Response\Подсказки\Area\GetLeavesSuggestsResponse;

/**
 * Группа методов "area" раздела HeadHunter API "Подсказки".
 */
class AreaProvider extends BaseHhProvider
{
    /**
     * Подсказки по регионам, являющимися листами в дереве регионов
     *
     * Также доступна загрузка [полного дерева регионов](#tag/Obshie-spravochniki/operation/get-areas) и [части дерева от определенного элемента](#tag/Obshie-spravochniki/operation/get-areas-from-specified)
     *
     * OperationId: get-area-leaves-suggests.
     * HTTP: GET /suggests/area_leaves.
     *
     * @param GetAreaLeavesSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetLeavesSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getLeavesSuggests(GetAreaLeavesSuggestsPrompt $prompt): GetLeavesSuggestsResponse
    {
        /** @var GetLeavesSuggestsResponse $response */
        $response = $this->request($prompt, GetLeavesSuggestsResponse::class);

        return $response;
    }
}
