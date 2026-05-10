<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ЧерновикиВакансий;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\PublishVacancyFromDraftPrompt;
use Andy87\ClientsHh\Generated\Response\ЧерновикиВакансий\Publish\VacancyFromDraftResponse;

/**
 * Группа методов "publish" раздела HeadHunter API "Черновики вакансий".
 */
class PublishProvider extends BaseHhProvider
{
    /**
     * Публикация вакансии на основе черновика
     *
     * OperationId: publish-vacancy-from-draft.
     * HTTP: POST /vacancies/drafts/{draft_id}/publish.
     *
     * @param PublishVacancyFromDraftPrompt $prompt DTO запроса.
     *
     * @return VacancyFromDraftResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function vacancyFromDraft(PublishVacancyFromDraftPrompt $prompt): VacancyFromDraftResponse
    {
        /** @var VacancyFromDraftResponse $response */
        $response = $this->request($prompt, VacancyFromDraftResponse::class);

        return $response;
    }
}
