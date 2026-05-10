<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\VacancyDrafts\ForValue;

use Andy87\ClientsHh\Generated\Response\SearchForVacancyDraftDuplicatesResponse as BaseSearchForVacancyDraftDuplicatesResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/drafts/{draft_id}/duplicates.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/search-for-vacancy-draft-duplicates
 *
 * @property float $found Общее количество дубликатов вакансии
 * @property bool $has_duplicates Существуют ли дубликаты вакансии
 * @property array<int, float> $items Список идентификаторов дубликатов вакансии
 */
class SearchVacancyDraftDuplicatesResponse extends BaseSearchForVacancyDraftDuplicatesResponse
{
}
