<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\EmployerInfo;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetVacancyBrandedTemplatesListPrompt;
use Andy87\ClientsHh\Generated\Response\EmployerInfo\Vacancy\GetBrandedTemplatesListResponse;

/**
 * Группа методов "vacancy" раздела HeadHunter API "Информация о работодателе".
 */
class VacancyProvider extends BaseHhProvider
{
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
     * @return GetBrandedTemplatesListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getBrandedTemplatesList(GetVacancyBrandedTemplatesListPrompt $prompt): GetBrandedTemplatesListResponse
    {
        /** @var GetBrandedTemplatesListResponse $response */
        $response = $this->request($prompt, GetBrandedTemplatesListResponse::class);

        return $response;
    }
}
