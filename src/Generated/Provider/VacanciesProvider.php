<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyPrompt;
use Andy87\ClientsHh\Generated\Response\GetVacancyResponse;

/**
 * Provider раздела HeadHunter API "Вакансии".
 * @property-read Vacancies\VacancyProvider $vacancy
 *
 */
class VacanciesProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'vacancy' => Vacancies\VacancyProvider::class,
    ];

    /**
     * Просмотр вакансии
     *
     * Возвращает подробную информацию по указанной вакансии
     *
     * OperationId: get-vacancy.
     * HTTP: GET /vacancies/{vacancy_id}.
     *
     * @param GetVacancyPrompt $prompt DTO запроса.
     *
     * @return GetVacancyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancy(GetVacancyPrompt $prompt): GetVacancyResponse
    {
        /** @var Vacancies\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->get($prompt);
    }
}
