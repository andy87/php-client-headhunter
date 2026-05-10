<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Suggestions;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetVacancyPositionsSuggestsPrompt;
use and_y87\ClientsHh\Generated\Response\Suggestions\Vacancy\GetPositionsSuggestsResponse;

/**
 * Группа методов "vacancy" раздела HeadHunter API "Подсказки".
 */
class VacancyProvider extends BaseHhProvider
{
    /**
     * Подсказки по должностям вакансий
     *
     * OperationId: get-vacancy-positions-suggests.
     * HTTP: GET /suggests/vacancy_positions.
     *
     * @param GetVacancyPositionsSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetPositionsSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getPositionsSuggests(GetVacancyPositionsSuggestsPrompt $prompt): GetPositionsSuggestsResponse
    {
        /** @var GetPositionsSuggestsResponse $response */
        $response = $this->request($prompt, GetPositionsSuggestsResponse::class);

        return $response;
    }
}
