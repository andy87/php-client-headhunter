<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\УслугиРаботодателя;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyAvailableServicesListPrompt;
use Andy87\ClientsHh\Generated\Response\УслугиРаботодателя\Vacancy\GetAvailableServicesListResponse;

/**
 * Группа методов "vacancy" раздела HeadHunter API "Услуги работодателя".
 */
class VacancyProvider extends BaseHhProvider
{
    /**
     * Получение списка доступных вариантов публикации вакансии
     *
     * Данный метод используется для получения списка доступных вариантов публикации и отправки этих значений в апи публикации вакансии/создание черновика
     *
     * OperationId: get-vacancy-available-services-list.
     * HTTP: GET /employers/{employer_id}/services/available_publications.
     *
     * @param GetVacancyAvailableServicesListPrompt $prompt DTO запроса.
     *
     * @return GetAvailableServicesListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getAvailableServicesList(GetVacancyAvailableServicesListPrompt $prompt): GetAvailableServicesListResponse
    {
        /** @var GetAvailableServicesListResponse $response */
        $response = $this->request($prompt, GetAvailableServicesListResponse::class);

        return $response;
    }
}
