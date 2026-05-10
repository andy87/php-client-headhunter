<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\ManagerInfo;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetAvailableVacancyTypesPrompt;
use Andy87\ClientsHh\Generated\Response\ManagerInfo\Available\GetVacancyTypesResponse;

/**
 * Группа методов "available" раздела HeadHunter API "Информация о менеджере".
 */
class AvailableProvider extends BaseHhProvider
{
    /**
     * Варианты публикации вакансий у текущего менеджера
     *
     * Нужно использовать [новый метод](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list). Метод позволяет понять, может ли менеджер публиковать вакансии и какие типы вакансий ему доступны. Возвращает все возможные типы публикации
     *
     * OperationId: get-available-vacancy-types.
     * HTTP: GET /employers/{employer_id}/managers/{manager_id}/vacancies/available_types.
     *
     * @param GetAvailableVacancyTypesPrompt $prompt DTO запроса.
     *
     * @return GetVacancyTypesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyTypes(GetAvailableVacancyTypesPrompt $prompt): GetVacancyTypesResponse
    {
        /** @var GetVacancyTypesResponse $response */
        $response = $this->request($prompt, GetVacancyTypesResponse::class);

        return $response;
    }
}
