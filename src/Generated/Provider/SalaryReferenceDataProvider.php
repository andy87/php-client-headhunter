<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetSalaryEmployeeLevelsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetSalaryIndustriesPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetSalaryProfessionalAreasPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetSalarySalaryAreasPrompt;
use and_y87\ClientsHh\Generated\Response\GetSalaryEmployeeLevelsResponse;
use and_y87\ClientsHh\Generated\Response\GetSalaryIndustriesResponse;
use and_y87\ClientsHh\Generated\Response\GetSalaryProfessionalAreasResponse;
use and_y87\ClientsHh\Generated\Response\GetSalarySalaryAreasResponse;

/**
 * Provider раздела HeadHunter API "Справочники Банка данных заработных плат".
 * @property-read SalaryReferenceData\SalaryProvider $salary
 *
 */
class SalaryReferenceDataProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'salary' => SalaryReferenceData\SalaryProvider::class,
    ];

    /**
     * Уровни компетенций
     *
     * Возвращает список уровней компетенций
     *
     * OperationId: get-salary-employee-levels.
     * HTTP: GET /salary_statistics/dictionaries/employee_levels.
     *
     * @param GetSalaryEmployeeLevelsPrompt $prompt DTO запроса.
     *
     * @return GetSalaryEmployeeLevelsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSalaryEmployeeLevels(GetSalaryEmployeeLevelsPrompt $prompt): GetSalaryEmployeeLevelsResponse
    {
        /** @var SalaryReferenceData\SalaryProvider $group */
        $group = $this->operationGroup('salary');

        return $group->getEmployeeLevels($prompt);
    }

    /**
     * Отрасли и сферы деятельности
     *
     * Возвращает двухуровневый список отраслей и сфер деятельности
     *
     * OperationId: get-salary-industries.
     * HTTP: GET /salary_statistics/dictionaries/salary_industries.
     *
     * @param GetSalaryIndustriesPrompt $prompt DTO запроса.
     *
     * @return GetSalaryIndustriesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSalaryIndustries(GetSalaryIndustriesPrompt $prompt): GetSalaryIndustriesResponse
    {
        /** @var SalaryReferenceData\SalaryProvider $group */
        $group = $this->operationGroup('salary');

        return $group->getIndustries($prompt);
    }

    /**
     * Профобласти и специализации
     *
     * Возвращает список профобластей и специализаций
     *
     * OperationId: get-salary-professional-areas.
     * HTTP: GET /salary_statistics/dictionaries/professional_areas.
     *
     * @param GetSalaryProfessionalAreasPrompt $prompt DTO запроса.
     *
     * @return GetSalaryProfessionalAreasResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSalaryProfessionalAreas(GetSalaryProfessionalAreasPrompt $prompt): GetSalaryProfessionalAreasResponse
    {
        /** @var SalaryReferenceData\SalaryProvider $group */
        $group = $this->operationGroup('salary');

        return $group->getProfessionalAreas($prompt);
    }

    /**
     * Регионы и города
     *
     * Возвращает список регионов, областей и городов
     *
     * OperationId: get-salary-salary-areas.
     * HTTP: GET /salary_statistics/dictionaries/salary_areas.
     *
     * @param GetSalarySalaryAreasPrompt $prompt DTO запроса.
     *
     * @return GetSalarySalaryAreasResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSalarySalaryAreas(GetSalarySalaryAreasPrompt $prompt): GetSalarySalaryAreasResponse
    {
        /** @var SalaryReferenceData\SalaryProvider $group */
        $group = $this->operationGroup('salary');

        return $group->getSalaryAreas($prompt);
    }
}
