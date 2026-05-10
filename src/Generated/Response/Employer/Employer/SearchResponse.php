<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\Employer\Employer;

use and_y87\ClientsHh\Generated\Response\SearchEmployerResponse as BaseSearchEmployerResponse;

/**
 * Ответ HeadHunter API [GET] /employers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/search-employer
 *
 * @property int $found Найдено результатов
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployerItem> $items Найденные работодатели
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 */
class SearchResponse extends BaseSearchEmployerResponse
{
}
