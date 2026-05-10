<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\VacancyDrafts;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\ChangeVacancyDraftPrompt;
use Andy87\ClientsHh\Generated\Prompt\CreateVacancyDraftPrompt;
use Andy87\ClientsHh\Generated\Prompt\DeleteVacancyDraftPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyDraftListPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyDraftPrompt;
use Andy87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy\ChangeDraftResponse;
use Andy87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy\CreateDraftResponse;
use Andy87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy\DeleteDraftResponse;
use Andy87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy\GetDraftListResponse;
use Andy87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy\GetDraftResponse;

/**
 * Группа методов "vacancy" раздела HeadHunter API "Черновики вакансий".
 */
class VacancyProvider extends BaseHhProvider
{
    /**
     * Изменение черновика вакансии
     *
     * OperationId: change-vacancy-draft.
     * HTTP: PUT /vacancies/drafts/{draft_id}.
     *
     * @param ChangeVacancyDraftPrompt $prompt DTO запроса.
     *
     * @return ChangeDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function changeDraft(ChangeVacancyDraftPrompt $prompt): ChangeDraftResponse
    {
        /** @var ChangeDraftResponse $response */
        $response = $this->request($prompt, ChangeDraftResponse::class);

        return $response;
    }

    /**
     * Создание черновика вакансии
     *
     * OperationId: create-vacancy-draft.
     * HTTP: POST /vacancies/drafts.
     *
     * @param CreateVacancyDraftPrompt $prompt DTO запроса.
     *
     * @return CreateDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createDraft(CreateVacancyDraftPrompt $prompt): CreateDraftResponse
    {
        /** @var CreateDraftResponse $response */
        $response = $this->request($prompt, CreateDraftResponse::class);

        return $response;
    }

    /**
     * Удаление черновика вакансии
     *
     * OperationId: delete-vacancy-draft.
     * HTTP: DELETE /vacancies/drafts/{draft_id}.
     *
     * @param DeleteVacancyDraftPrompt $prompt DTO запроса.
     *
     * @return DeleteDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function deleteDraft(DeleteVacancyDraftPrompt $prompt): DeleteDraftResponse
    {
        /** @var DeleteDraftResponse $response */
        $response = $this->request($prompt, DeleteDraftResponse::class);

        return $response;
    }

    /**
     * Получение черновика вакансии
     *
     * OperationId: get-vacancy-draft.
     * HTTP: GET /vacancies/drafts/{draft_id}.
     *
     * @param GetVacancyDraftPrompt $prompt DTO запроса.
     *
     * @return GetDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getDraft(GetVacancyDraftPrompt $prompt): GetDraftResponse
    {
        /** @var GetDraftResponse $response */
        $response = $this->request($prompt, GetDraftResponse::class);

        return $response;
    }

    /**
     * Получение списка черновиков вакансий
     *
     * OperationId: get-vacancy-draft-list.
     * HTTP: GET /vacancies/drafts.
     *
     * @param GetVacancyDraftListPrompt $prompt DTO запроса.
     *
     * @return GetDraftListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getDraftList(GetVacancyDraftListPrompt $prompt): GetDraftListResponse
    {
        /** @var GetDraftListResponse $response */
        $response = $this->request($prompt, GetDraftListResponse::class);

        return $response;
    }
}
