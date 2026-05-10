<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Suggests;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyPositionsSuggestsPrompt;
use Andy87\ClientsHh\Generated\Response\Suggests\Vacancy\GetPositionsSuggestsResponse;

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
