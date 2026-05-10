<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancyManagement\Hidden;

use and_y87\ClientsHh\Generated\Response\GetHiddenVacanciesResponse as BaseGetHiddenVacanciesResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/vacancies/hidden.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-hidden-vacancies
 *
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesVacancyArchived> $items Список удаленных вакансий
 */
class GetVacanciesResponse extends BaseGetHiddenVacanciesResponse
{
}
