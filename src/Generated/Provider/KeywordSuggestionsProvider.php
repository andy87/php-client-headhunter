<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetResumeSearchKeywordsSuggestsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetVacancySearchKeywordsPrompt;
use and_y87\ClientsHh\Generated\Response\GetResumeSearchKeywordsSuggestsResponse;
use and_y87\ClientsHh\Generated\Response\GetVacancySearchKeywordsResponse;

/**
 * Provider раздела HeadHunter API "Подсказки по ключевым словам".
 * @property-read KeywordSuggestions\GetProvider $get
 * @property-read KeywordSuggestions\VacancyProvider $vacancy
 *
 */
class KeywordSuggestionsProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'get' => KeywordSuggestions\GetProvider::class,
        'vacancy' => KeywordSuggestions\VacancyProvider::class,
    ];

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
     * @return GetResumeSearchKeywordsSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getResumeSearchKeywordsSuggests(GetResumeSearchKeywordsSuggestsPrompt $prompt): GetResumeSearchKeywordsSuggestsResponse
    {
        /** @var KeywordSuggestions\GetProvider $group */
        $group = $this->operationGroup('get');

        return $group->resumeSearchKeywordsSuggests($prompt);
    }

    /**
     * Подсказки по ключевым словам поиска вакансий
     *
     * Предназначены для использования в поле `text` при [поиске вакансий](#tag/Poisk-vakansij/operation/get-vacancies). Содержит названия должностей, компаний и другие фразы, часто используемые при поиске вакансий
     *
     * OperationId: get-vacancy-search-keywords.
     * HTTP: GET /suggests/vacancy_search_keyword.
     *
     * @param GetVacancySearchKeywordsPrompt $prompt DTO запроса.
     *
     * @return GetVacancySearchKeywordsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancySearchKeywords(GetVacancySearchKeywordsPrompt $prompt): GetVacancySearchKeywordsResponse
    {
        /** @var KeywordSuggestions\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getSearchKeywords($prompt);
    }
}
