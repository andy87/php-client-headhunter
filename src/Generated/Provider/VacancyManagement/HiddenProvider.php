<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\VacancyManagement;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetHiddenVacanciesPrompt;
use and_y87\ClientsHh\Generated\Response\VacancyManagement\Hidden\GetVacanciesResponse;

/**
 * Группа методов "hidden" раздела HeadHunter API "Управление вакансиями".
 */
class HiddenProvider extends BaseHhProvider
{
    /**
     * Список удаленных вакансий
     *
     * OperationId: get-hidden-vacancies.
     * HTTP: GET /employers/{employer_id}/vacancies/hidden.
     *
     * @param GetHiddenVacanciesPrompt $prompt DTO запроса.
     *
     * @return GetVacanciesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancies(GetHiddenVacanciesPrompt $prompt): GetVacanciesResponse
    {
        /** @var GetVacanciesResponse $response */
        $response = $this->request($prompt, GetVacanciesResponse::class);

        return $response;
    }
}
