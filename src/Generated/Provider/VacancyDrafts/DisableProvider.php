<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\VacancyDrafts;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\DisableAutomaticVacancyPublicationPrompt;
use Andy87\ClientsHh\Generated\Response\VacancyDrafts\Disable\AutomaticVacancyPublicationResponse;

/**
 * Группа методов "disable" раздела HeadHunter API "Черновики вакансий".
 */
class DisableProvider extends BaseHhProvider
{
    /**
     * Отмена автопубликации вакансии
     *
     * OperationId: disable-automatic-vacancy-publication.
     * HTTP: DELETE /vacancies/auto_publication.
     *
     * @param DisableAutomaticVacancyPublicationPrompt $prompt DTO запроса.
     *
     * @return AutomaticVacancyPublicationResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function automaticVacancyPublication(DisableAutomaticVacancyPublicationPrompt $prompt): AutomaticVacancyPublicationResponse
    {
        /** @var AutomaticVacancyPublicationResponse $response */
        $response = $this->request($prompt, AutomaticVacancyPublicationResponse::class);

        return $response;
    }
}
