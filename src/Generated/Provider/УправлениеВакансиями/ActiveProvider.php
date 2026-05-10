<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\УправлениеВакансиями;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetActiveVacancyListPrompt;
use Andy87\ClientsHh\Generated\Response\УправлениеВакансиями\Active\GetVacancyListResponse;

/**
 * Группа методов "active" раздела HeadHunter API "Управление вакансиями".
 */
class ActiveProvider extends BaseHhProvider
{
    /**
     * Просмотр списка опубликованных вакансий
     *
     * Возвращает список опубликованных вакансий.
     *
     * Если передан параметр `resume_id`, то в список попадут только те вакансии, которые подходят для указанного резюме. Кроме того, ответ будет содержать дополнительные поля
     *
     * OperationId: get-active-vacancy-list.
     * HTTP: GET /employers/{employer_id}/vacancies/active.
     *
     * @param GetActiveVacancyListPrompt $prompt DTO запроса.
     *
     * @return GetVacancyListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyList(GetActiveVacancyListPrompt $prompt): GetVacancyListResponse
    {
        /** @var GetVacancyListResponse $response */
        $response = $this->request($prompt, GetVacancyListResponse::class);

        return $response;
    }
}
