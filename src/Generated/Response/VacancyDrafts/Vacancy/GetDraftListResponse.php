<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancyDrafts\Vacancy;

use and_y87\ClientsHh\Generated\Response\GetVacancyDraftListResponse as BaseGetVacancyDraftListResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/drafts.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-draft-list
 *
 * @property int $found Response field found
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftItem> $items Список черновиков
 * @property int $page Response field page
 * @property int $pages Response field pages
 * @property int $per_page Response field per_page
 */
class GetDraftListResponse extends BaseGetVacancyDraftListResponse
{
}
