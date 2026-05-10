<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\KeywordSuggestions\Vacancy;

use and_y87\ClientsHh\Generated\Response\GetVacancySearchKeywordsResponse as BaseGetVacancySearchKeywordsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/vacancy_search_keyword.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-search-keywords
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem> $items Response field items
 * @property string|null $suggest_id Response field suggest_id
 */
class GetSearchKeywordsResponse extends BaseGetVacancySearchKeywordsResponse
{
}
