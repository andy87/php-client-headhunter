<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\VacancyManagement;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetArchivedVacanciesPrompt;
use and_y87\ClientsHh\Generated\Response\VacancyManagement\Archived\GetVacanciesResponse;

/**
 * Группа методов "archived" раздела HeadHunter API "Управление вакансиями".
 */
class ArchivedProvider extends BaseHhProvider
{
    /**
     * Список архивных вакансий
     *
     * OperationId: get-archived-vacancies.
     * HTTP: GET /employers/{employer_id}/vacancies/archived.
     *
     * @param GetArchivedVacanciesPrompt $prompt DTO запроса.
     *
     * @return GetVacanciesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancies(GetArchivedVacanciesPrompt $prompt): GetVacanciesResponse
    {
        /** @var GetVacanciesResponse $response */
        $response = $this->request($prompt, GetVacanciesResponse::class);

        return $response;
    }
}
