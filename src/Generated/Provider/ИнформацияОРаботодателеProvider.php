<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetEmployerDepartmentsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetEmployerVacancyAreasPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetTestsDictionaryPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyBrandedTemplatesListPrompt;
use Andy87\ClientsHh\Generated\Response\GetEmployerDepartmentsResponse;
use Andy87\ClientsHh\Generated\Response\GetEmployerVacancyAreasResponse;
use Andy87\ClientsHh\Generated\Response\GetTestsDictionaryResponse;
use Andy87\ClientsHh\Generated\Response\GetVacancyBrandedTemplatesListResponse;

/**
 * Provider раздела HeadHunter API "Информация о работодателе".
 * @property-read ИнформацияОРаботодателе\EmployerProvider $employer
 * @property-read ИнформацияОРаботодателе\TestsProvider $tests
 * @property-read ИнформацияОРаботодателе\VacancyProvider $vacancy
 *
 */
class ИнформацияОРаботодателеProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'employer' => ИнформацияОРаботодателе\EmployerProvider::class,
        'tests' => ИнформацияОРаботодателе\TestsProvider::class,
        'vacancy' => ИнформацияОРаботодателе\VacancyProvider::class,
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
        /** @var ИнформацияОРаботодателе\EmployerProvider $group */
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
        /** @var ИнформацияОРаботодателе\EmployerProvider $group */
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
        /** @var ИнформацияОРаботодателе\TestsProvider $group */
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
        /** @var ИнформацияОРаботодателе\VacancyProvider $group */
        $group = $this->operationGroup('vacancy');

        return $group->getBrandedTemplatesList($prompt);
    }
}
