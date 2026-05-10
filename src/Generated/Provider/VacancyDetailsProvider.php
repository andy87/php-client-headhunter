<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetVacancyPrompt;
use and_y87\ClientsHh\Generated\Response\GetVacancyResponse;

/**
 * Provider раздела HeadHunter API "Вакансии".
 * @property-read VacancyDetails\VacancyProvider $vacancy
 *
 */
class VacancyDetailsProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'vacancy' => VacancyDetails\VacancyProvider::class,
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
        /** @var VacancyDetails\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->get($prompt);
    }
}
