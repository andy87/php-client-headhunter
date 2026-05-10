<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ИнформацияОРаботодателе\Vacancy;

use Andy87\ClientsHh\Generated\Response\GetVacancyBrandedTemplatesListResponse as BaseGetVacancyBrandedTemplatesListResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/vacancy_branded_templates.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-branded-templates-list
 *
 * @property array<int, array<string, mixed>> $items Список доступных брендированных шаблонов вакансий
 */
class GetBrandedTemplatesListResponse extends BaseGetVacancyBrandedTemplatesListResponse
{
}
