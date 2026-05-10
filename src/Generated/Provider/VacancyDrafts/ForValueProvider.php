<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\VacancyDrafts;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\SearchForVacancyDraftDuplicatesPrompt;
use Andy87\ClientsHh\Generated\Response\VacancyDrafts\ForValue\SearchVacancyDraftDuplicatesResponse;

/**
 * Группа методов "forValue" раздела HeadHunter API "Черновики вакансий".
 */
class ForValueProvider extends BaseHhProvider
{
    /**
     * Проверка наличия дубликатов вакансии
     *
     * OperationId: search-for-vacancy-draft-duplicates.
     * HTTP: GET /vacancies/drafts/{draft_id}/duplicates.
     *
     * @param SearchForVacancyDraftDuplicatesPrompt $prompt DTO запроса.
     *
     * @return SearchVacancyDraftDuplicatesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function searchVacancyDraftDuplicates(SearchForVacancyDraftDuplicatesPrompt $prompt): SearchVacancyDraftDuplicatesResponse
    {
        /** @var SearchVacancyDraftDuplicatesResponse $response */
        $response = $this->request($prompt, SearchVacancyDraftDuplicatesResponse::class);

        return $response;
    }
}
