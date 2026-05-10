<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Vacancies;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetVacanciesPrompt;
use Andy87\ClientsHh\Generated\Response\Vacancies\Vacancies\GetResponse;

/**
 * Группа методов "vacancies" раздела HeadHunter API "Vacancies".
 */
class VacanciesProvider extends BaseHhProvider
{
    /**
     * Search vacancies.
     *
     * OperationId: get-vacancies.
     * HTTP: GET /vacancies.
     *
     * @param GetVacanciesPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetVacanciesPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
