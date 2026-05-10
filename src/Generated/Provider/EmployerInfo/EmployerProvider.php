<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\EmployerInfo;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerDepartmentsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerVacancyAreasPrompt;
use and_y87\ClientsHh\Generated\Response\EmployerInfo\Employer\GetDepartmentsResponse;
use and_y87\ClientsHh\Generated\Response\EmployerInfo\Employer\GetVacancyAreasResponse;

/**
 * Группа методов "employer" раздела HeadHunter API "Информация о работодателе".
 */
class EmployerProvider extends BaseHhProvider
{
    /**
     * Справочник департаментов работодателя
     *
     * Возвращает список департаментов работодателя.
     *
     * Значения в справочнике могут поменяться в любой момент
     *
     * OperationId: get-employer-departments.
     * HTTP: GET /employers/{employer_id}/departments.
     *
     * @param GetEmployerDepartmentsPrompt $prompt DTO запроса.
     *
     * @return GetDepartmentsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getDepartments(GetEmployerDepartmentsPrompt $prompt): GetDepartmentsResponse
    {
        /** @var GetDepartmentsResponse $response */
        $response = $this->request($prompt, GetDepartmentsResponse::class);

        return $response;
    }

    /**
     * Список регионов, в которых есть активные вакансии
     *
     * Возвращает список регионов, в которых на данный момент есть активные вакансии от указанного работодателя.
     *
     * Значения в справочнике могут поменяться в любой момент
     *
     * OperationId: get-employer-vacancy-areas.
     * HTTP: GET /employers/{employer_id}/vacancy_areas/active.
     *
     * @param GetEmployerVacancyAreasPrompt $prompt DTO запроса.
     *
     * @return GetVacancyAreasResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyAreas(GetEmployerVacancyAreasPrompt $prompt): GetVacancyAreasResponse
    {
        /** @var GetVacancyAreasResponse $response */
        $response = $this->request($prompt, GetVacancyAreasResponse::class);

        return $response;
    }
}
