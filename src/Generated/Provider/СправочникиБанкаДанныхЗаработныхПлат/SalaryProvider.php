<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\СправочникиБанкаДанныхЗаработныхПлат;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetSalaryEmployeeLevelsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetSalaryIndustriesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetSalaryProfessionalAreasPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetSalarySalaryAreasPrompt;
use Andy87\ClientsHh\Generated\Response\СправочникиБанкаДанныхЗаработныхПлат\Salary\GetEmployeeLevelsResponse;
use Andy87\ClientsHh\Generated\Response\СправочникиБанкаДанныхЗаработныхПлат\Salary\GetIndustriesResponse;
use Andy87\ClientsHh\Generated\Response\СправочникиБанкаДанныхЗаработныхПлат\Salary\GetProfessionalAreasResponse;
use Andy87\ClientsHh\Generated\Response\СправочникиБанкаДанныхЗаработныхПлат\Salary\GetSalaryAreasResponse;

/**
 * Группа методов "salary" раздела HeadHunter API "Справочники Банка данных заработных плат".
 */
class SalaryProvider extends BaseHhProvider
{
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
     * @return GetEmployeeLevelsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getEmployeeLevels(GetSalaryEmployeeLevelsPrompt $prompt): GetEmployeeLevelsResponse
    {
        /** @var GetEmployeeLevelsResponse $response */
        $response = $this->request($prompt, GetEmployeeLevelsResponse::class);

        return $response;
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
     * @return GetIndustriesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getIndustries(GetSalaryIndustriesPrompt $prompt): GetIndustriesResponse
    {
        /** @var GetIndustriesResponse $response */
        $response = $this->request($prompt, GetIndustriesResponse::class);

        return $response;
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
     * @return GetProfessionalAreasResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getProfessionalAreas(GetSalaryProfessionalAreasPrompt $prompt): GetProfessionalAreasResponse
    {
        /** @var GetProfessionalAreasResponse $response */
        $response = $this->request($prompt, GetProfessionalAreasResponse::class);

        return $response;
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
     * @return GetSalaryAreasResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSalaryAreas(GetSalarySalaryAreasPrompt $prompt): GetSalaryAreasResponse
    {
        /** @var GetSalaryAreasResponse $response */
        $response = $this->request($prompt, GetSalaryAreasResponse::class);

        return $response;
    }
}
