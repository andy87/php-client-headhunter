<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\УправлениеВакансиями\Archived;

use Andy87\ClientsHh\Generated\Response\GetArchivedVacanciesResponse as BaseGetArchivedVacanciesResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/vacancies/archived.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-archived-vacancies
 *
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyArchived> $items Массив вакансий в архиве
 */
class GetVacanciesResponse extends BaseGetArchivedVacanciesResponse
{
}
