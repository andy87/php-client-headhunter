<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\VacancyManagement\Vacancy;

use Andy87\ClientsHh\Generated\Response\GetVacancyVisitorsResponse as BaseGetVacancyVisitorsResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/visitors.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-visitors
 *
 * @property array<int, mixed> $items Список сокращенных представлений резюме
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 * @property float $hidden_on_page Количество удаленных или скрытых соискателями резюме на странице
 */
class GetVisitorsResponse extends BaseGetVacancyVisitorsResponse
{
}
