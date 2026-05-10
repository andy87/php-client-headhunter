<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\KeywordSuggestions;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetResumeSearchKeywordsSuggestsPrompt;
use and_y87\ClientsHh\Generated\Response\KeywordSuggestions\Get\ResumeSearchKeywordsSuggestsResponse;

/**
 * Группа методов "get" раздела HeadHunter API "Подсказки по ключевым словам".
 */
class GetProvider extends BaseHhProvider
{
    /**
     * Подсказки по ключевым словам поиска резюме
     *
     * Предназначены для использования в поле `text` при [поиске резюме](#tag/Poisk-rezyume/operation/search-for-resumes). Содержит названия должностей, компаний и другие фразы, часто используемые при поиске резюме
     *
     * OperationId: get-resume-search-keywords-suggests.
     * HTTP: GET /suggests/resume_search_keyword.
     *
     * @param GetResumeSearchKeywordsSuggestsPrompt $prompt DTO запроса.
     *
     * @return ResumeSearchKeywordsSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function resumeSearchKeywordsSuggests(GetResumeSearchKeywordsSuggestsPrompt $prompt): ResumeSearchKeywordsSuggestsResponse
    {
        /** @var ResumeSearchKeywordsSuggestsResponse $response */
        $response = $this->request($prompt, ResumeSearchKeywordsSuggestsResponse::class);

        return $response;
    }
}
