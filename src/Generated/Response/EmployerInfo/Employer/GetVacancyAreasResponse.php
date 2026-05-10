<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\EmployerInfo\Employer;

use and_y87\ClientsHh\Generated\Response\GetEmployerVacancyAreasResponse as BaseGetEmployerVacancyAreasResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/vacancy_areas/active.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-vacancy-areas
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea> $items Список регионов
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 */
class GetVacancyAreasResponse extends BaseGetEmployerVacancyAreasResponse
{
}
