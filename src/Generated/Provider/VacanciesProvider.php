<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetVacanciesPrompt;
use Andy87\ClientsHh\Generated\Response\GetVacanciesResponse;

/**
 * Provider раздела HeadHunter API "Vacancies".
 * @property-read Vacancies\VacanciesProvider $vacancies
 *
 */
class VacanciesProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'vacancies' => Vacancies\VacanciesProvider::class,
    ];

    /**
     * Search vacancies.
     *
     * OperationId: get-vacancies.
     * HTTP: GET /vacancies.
     *
     * @param GetVacanciesPrompt $prompt DTO запроса.
     *
     * @return GetVacanciesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancies(GetVacanciesPrompt $prompt): GetVacanciesResponse
    {
        /** @var Vacancies\VacanciesProvider $group */
        $group = $this->operationGroup('vacancies');

        return $group->get($prompt);
    }
}
