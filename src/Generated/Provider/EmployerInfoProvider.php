<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerDepartmentsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetEmployerVacancyAreasPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetTestsDictionaryPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetVacancyBrandedTemplatesListPrompt;
use and_y87\ClientsHh\Generated\Response\GetEmployerDepartmentsResponse;
use and_y87\ClientsHh\Generated\Response\GetEmployerVacancyAreasResponse;
use and_y87\ClientsHh\Generated\Response\GetTestsDictionaryResponse;
use and_y87\ClientsHh\Generated\Response\GetVacancyBrandedTemplatesListResponse;

/**
 * Provider раздела HeadHunter API "Информация о работодателе".
 * @property-read EmployerInfo\EmployerProvider $employer
 * @property-read EmployerInfo\TestsProvider $tests
 * @property-read EmployerInfo\VacancyProvider $vacancy
 *
 */
class EmployerInfoProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'employer' => EmployerInfo\EmployerProvider::class,
        'tests' => EmployerInfo\TestsProvider::class,
        'vacancy' => EmployerInfo\VacancyProvider::class,
    ];

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
     * @return GetEmployerDepartmentsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployerDepartments(GetEmployerDepartmentsPrompt $prompt): GetEmployerDepartmentsResponse
    {
        /** @var EmployerInfo\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->getDepartments($prompt);
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
     * @return GetEmployerVacancyAreasResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployerVacancyAreas(GetEmployerVacancyAreasPrompt $prompt): GetEmployerVacancyAreasResponse
    {
        /** @var EmployerInfo\EmployerProvider $group */
        $group = $this->operationGroup('employer');

        return $group->getVacancyAreas($prompt);
    }

    /**
     * Справочник тестов работодателя
     *
     * Возвращает список сохраненных тестов работодателя
     *
     * OperationId: get-tests-dictionary.
     * HTTP: GET /employers/{employer_id}/tests.
     *
     * @param GetTestsDictionaryPrompt $prompt DTO запроса.
     *
     * @return GetTestsDictionaryResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getTestsDictionary(GetTestsDictionaryPrompt $prompt): GetTestsDictionaryResponse
    {
        /** @var EmployerInfo\TestsProvider $group */
        $group = $this->operationGroup('tests');

        return $group->getDictionary($prompt);
    }

    /**
     * Список доступных бренд шаблонов вакансий работодателя
     *
     * Внимание! Значения в справочниках могут поменяться в любой момент. Не нужно завязываться на них.
     *
     * Использование брендированных шаблонов вакансии доступно работодателям, оплатившим и активировавшим соответствующую
     * услугу. Подробнее на сайте [hh.ru](https://hh.ru/article/brandpage)
     *
     * OperationId: get-vacancy-branded-templates-list.
     * HTTP: GET /employers/{employer_id}/vacancy_branded_templates.
     *
     * @param GetVacancyBrandedTemplatesListPrompt $prompt DTO запроса.
     *
     * @return GetVacancyBrandedTemplatesListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVacancyBrandedTemplatesList(GetVacancyBrandedTemplatesListPrompt $prompt): GetVacancyBrandedTemplatesListResponse
    {
        /** @var EmployerInfo\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getBrandedTemplatesList($prompt);
    }
}
