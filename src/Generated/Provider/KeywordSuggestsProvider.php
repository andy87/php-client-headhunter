<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetResumeSearchKeywordsSuggestsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancySearchKeywordsPrompt;
use Andy87\ClientsHh\Generated\Response\GetResumeSearchKeywordsSuggestsResponse;
use Andy87\ClientsHh\Generated\Response\GetVacancySearchKeywordsResponse;

/**
 * Provider раздела HeadHunter API "Подсказки по ключевым словам".
 * @property-read KeywordSuggests\GetProvider $get
 * @property-read KeywordSuggests\VacancyProvider $vacancy
 *
 */
class KeywordSuggestsProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'get' => KeywordSuggests\GetProvider::class,
        'vacancy' => KeywordSuggests\VacancyProvider::class,
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
        /** @var KeywordSuggests\GetProvider $group */
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
        /** @var KeywordSuggests\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getSearchKeywords($prompt);
    }
}
