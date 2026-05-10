<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\СохраненныеПоискиРезюме\Saved;

use Andy87\ClientsHh\Generated\Response\GetSavedResumeSearchesResponse as BaseGetSavedResumeSearchesResponse;

/**
 * Ответ HeadHunter API [GET] /saved_searches/resumes.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-saved-resume-searches
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\SavedSearchesSavedSearchItem> $items Список сохраненных поисков вакансий/резюме
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 */
class GetResumeSearchesResponse extends BaseGetSavedResumeSearchesResponse
{
}
