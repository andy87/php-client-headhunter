<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ResumeSearch\ForValue;

use Andy87\ClientsHh\Generated\Response\SearchForResumesResponse as BaseSearchForResumesResponse;

/**
 * Ответ HeadHunter API [GET] /resumes.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/search-for-resumes
 *
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumesSearchForResumesItem> $items Массив найденных резюме
 */
class SearchResumesResponse extends BaseSearchForResumesResponse
{
}
