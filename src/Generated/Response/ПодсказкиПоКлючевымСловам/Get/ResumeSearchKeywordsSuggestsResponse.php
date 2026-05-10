<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ПодсказкиПоКлючевымСловам\Get;

use Andy87\ClientsHh\Generated\Response\GetResumeSearchKeywordsSuggestsResponse as BaseGetResumeSearchKeywordsSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/resume_search_keyword.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-resume-search-keywords-suggests
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem> $items Response field items
 * @property string|null $suggest_id Response field suggest_id
 */
class ResumeSearchKeywordsSuggestsResponse extends BaseGetResumeSearchKeywordsSuggestsResponse
{
}
