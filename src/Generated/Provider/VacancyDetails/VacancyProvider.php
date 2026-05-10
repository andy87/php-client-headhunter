<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\VacancyDetails;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetVacancyPrompt;
use and_y87\ClientsHh\Generated\Response\VacancyDetails\Vacancy\GetResponse;

/**
 * Группа методов "vacancy" раздела HeadHunter API "Вакансии".
 */
class VacancyProvider extends BaseHhProvider
{
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
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetVacancyPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
