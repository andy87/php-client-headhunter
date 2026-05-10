<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\ChangeVacancyDraftPrompt;
use Andy87\ClientsHh\Generated\Prompt\CreateVacancyDraftPrompt;
use Andy87\ClientsHh\Generated\Prompt\DeleteVacancyDraftPrompt;
use Andy87\ClientsHh\Generated\Prompt\DisableAutomaticVacancyPublicationPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyDraftListPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyDraftPrompt;
use Andy87\ClientsHh\Generated\Prompt\PublishVacancyFromDraftPrompt;
use Andy87\ClientsHh\Generated\Prompt\SearchForVacancyDraftDuplicatesPrompt;
use Andy87\ClientsHh\Generated\Response\ChangeVacancyDraftResponse;
use Andy87\ClientsHh\Generated\Response\CreateVacancyDraftResponse;
use Andy87\ClientsHh\Generated\Response\DeleteVacancyDraftResponse;
use Andy87\ClientsHh\Generated\Response\DisableAutomaticVacancyPublicationResponse;
use Andy87\ClientsHh\Generated\Response\GetVacancyDraftListResponse;
use Andy87\ClientsHh\Generated\Response\GetVacancyDraftResponse;
use Andy87\ClientsHh\Generated\Response\PublishVacancyFromDraftResponse;
use Andy87\ClientsHh\Generated\Response\SearchForVacancyDraftDuplicatesResponse;

/**
 * Provider раздела HeadHunter API "Черновики вакансий".
 * @property-read VacancyDrafts\DisableProvider $disable
 * @property-read VacancyDrafts\ForValueProvider $forValue
 * @property-read VacancyDrafts\PublishProvider $publish
 * @property-read VacancyDrafts\VacancyProvider $vacancy
 *
 */
class VacancyDraftsProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'disable' => VacancyDrafts\DisableProvider::class,
        'forValue' => VacancyDrafts\ForValueProvider::class,
        'publish' => VacancyDrafts\PublishProvider::class,
        'vacancy' => VacancyDrafts\VacancyProvider::class,
    ];

    /**
     * Изменение черновика вакансии
     *
     * OperationId: change-vacancy-draft.
     * HTTP: PUT /vacancies/drafts/{draft_id}.
     *
     * @param ChangeVacancyDraftPrompt $prompt DTO запроса.
     *
     * @return ChangeVacancyDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function changeVacancyDraft(ChangeVacancyDraftPrompt $prompt): ChangeVacancyDraftResponse
    {
        /** @var VacancyDrafts\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->changeDraft($prompt);
    }

    /**
     * Создание черновика вакансии
     *
     * OperationId: create-vacancy-draft.
     * HTTP: POST /vacancies/drafts.
     *
     * @param CreateVacancyDraftPrompt $prompt DTO запроса.
     *
     * @return CreateVacancyDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createVacancyDraft(CreateVacancyDraftPrompt $prompt): CreateVacancyDraftResponse
    {
        /** @var VacancyDrafts\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->createDraft($prompt);
    }

    /**
     * Удаление черновика вакансии
     *
     * OperationId: delete-vacancy-draft.
     * HTTP: DELETE /vacancies/drafts/{draft_id}.
     *
     * @param DeleteVacancyDraftPrompt $prompt DTO запроса.
     *
     * @return DeleteVacancyDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function deleteVacancyDraft(DeleteVacancyDraftPrompt $prompt): DeleteVacancyDraftResponse
    {
        /** @var VacancyDrafts\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->deleteDraft($prompt);
    }

    /**
     * Отмена автопубликации вакансии
     *
     * OperationId: disable-automatic-vacancy-publication.
     * HTTP: DELETE /vacancies/auto_publication.
     *
     * @param DisableAutomaticVacancyPublicationPrompt $prompt DTO запроса.
     *
     * @return DisableAutomaticVacancyPublicationResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function disableAutomaticVacancyPublication(DisableAutomaticVacancyPublicationPrompt $prompt): DisableAutomaticVacancyPublicationResponse
    {
        /** @var VacancyDrafts\DisableProvider $group */
        $group = $this->operationGroup('disable');

        return $group->automaticVacancyPublication($prompt);
    }

    /**
     * Получение черновика вакансии
     *
     * OperationId: get-vacancy-draft.
     * HTTP: GET /vacancies/drafts/{draft_id}.
     *
     * @param GetVacancyDraftPrompt $prompt DTO запроса.
     *
     * @return GetVacancyDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyDraft(GetVacancyDraftPrompt $prompt): GetVacancyDraftResponse
    {
        /** @var VacancyDrafts\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getDraft($prompt);
    }

    /**
     * Получение списка черновиков вакансий
     *
     * OperationId: get-vacancy-draft-list.
     * HTTP: GET /vacancies/drafts.
     *
     * @param GetVacancyDraftListPrompt $prompt DTO запроса.
     *
     * @return GetVacancyDraftListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyDraftList(GetVacancyDraftListPrompt $prompt): GetVacancyDraftListResponse
    {
        /** @var VacancyDrafts\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getDraftList($prompt);
    }

    /**
     * Публикация вакансии на основе черновика
     *
     * OperationId: publish-vacancy-from-draft.
     * HTTP: POST /vacancies/drafts/{draft_id}/publish.
     *
     * @param PublishVacancyFromDraftPrompt $prompt DTO запроса.
     *
     * @return PublishVacancyFromDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function publishVacancyFromDraft(PublishVacancyFromDraftPrompt $prompt): PublishVacancyFromDraftResponse
    {
        /** @var VacancyDrafts\PublishProvider $group */
        $group = $this->operationGroup('publish');

        return $group->vacancyFromDraft($prompt);
    }

    /**
     * Проверка наличия дубликатов вакансии
     *
     * OperationId: search-for-vacancy-draft-duplicates.
     * HTTP: GET /vacancies/drafts/{draft_id}/duplicates.
     *
     * @param SearchForVacancyDraftDuplicatesPrompt $prompt DTO запроса.
     *
     * @return SearchForVacancyDraftDuplicatesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function searchForVacancyDraftDuplicates(SearchForVacancyDraftDuplicatesPrompt $prompt): SearchForVacancyDraftDuplicatesResponse
    {
        /** @var VacancyDrafts\ForValueProvider $group */
        $group = $this->operationGroup('forValue');

        return $group->searchVacancyDraftDuplicates($prompt);
    }
}
