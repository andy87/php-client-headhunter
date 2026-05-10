<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Suggests;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetPositionsSuggestionsPrompt;
use Andy87\ClientsHh\Generated\Response\Suggests\Positions\GetSuggestionsResponse;

/**
 * Группа методов "positions" раздела HeadHunter API "Подсказки".
 */
class PositionsProvider extends BaseHhProvider
{
    /**
     * Подсказки по должностям резюме
     *
     * OperationId: get-positions-suggestions.
     * HTTP: GET /suggests/positions.
     *
     * @param GetPositionsSuggestionsPrompt $prompt DTO запроса.
     *
     * @return GetSuggestionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSuggestions(GetPositionsSuggestionsPrompt $prompt): GetSuggestionsResponse
    {
        /** @var GetSuggestionsResponse $response */
        $response = $this->request($prompt, GetSuggestionsResponse::class);

        return $response;
    }
}
