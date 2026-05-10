<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\Vacancies\Vacancies;

use Andy87\ClientsHh\Generated\Prompt\GetVacanciesPrompt as BaseGetVacanciesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /vacancies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancies
 *
 * @property string|null $text Search text.
 * @property int|null $per_page Items per page.
 */
class GetPrompt extends BaseGetVacanciesPrompt
{
}
