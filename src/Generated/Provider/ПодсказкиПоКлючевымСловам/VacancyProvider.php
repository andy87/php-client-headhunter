<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ПодсказкиПоКлючевымСловам;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetVacancySearchKeywordsPrompt;
use Andy87\ClientsHh\Generated\Response\ПодсказкиПоКлючевымСловам\Vacancy\GetSearchKeywordsResponse;

/**
 * Группа методов "vacancy" раздела HeadHunter API "Подсказки по ключевым словам".
 */
class VacancyProvider extends BaseHhProvider
{
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
     * @return GetSearchKeywordsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSearchKeywords(GetVacancySearchKeywordsPrompt $prompt): GetSearchKeywordsResponse
    {
        /** @var GetSearchKeywordsResponse $response */
        $response = $this->request($prompt, GetSearchKeywordsResponse::class);

        return $response;
    }
}
