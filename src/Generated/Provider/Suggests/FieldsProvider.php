<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Suggests;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetFieldsOfStudySuggestionsPrompt;
use Andy87\ClientsHh\Generated\Response\Suggests\Fields\GetOfStudySuggestionsResponse;

/**
 * Группа методов "fields" раздела HeadHunter API "Подсказки".
 */
class FieldsProvider extends BaseHhProvider
{
    /**
     * Подсказки по специализациям
     *
     * OperationId: get-fields-of-study-suggestions.
     * HTTP: GET /suggests/fields_of_study.
     *
     * @param GetFieldsOfStudySuggestionsPrompt $prompt DTO запроса.
     *
     * @return GetOfStudySuggestionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getOfStudySuggestions(GetFieldsOfStudySuggestionsPrompt $prompt): GetOfStudySuggestionsResponse
    {
        /** @var GetOfStudySuggestionsResponse $response */
        $response = $this->request($prompt, GetOfStudySuggestionsResponse::class);

        return $response;
    }
}
