<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Vacancies;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyPrompt;
use Andy87\ClientsHh\Generated\Response\Vacancies\Vacancy\GetResponse;

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
