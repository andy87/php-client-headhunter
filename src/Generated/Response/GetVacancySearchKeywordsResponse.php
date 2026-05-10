<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/vacancy_search_keyword.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-search-keywords
 */
class GetVacancySearchKeywordsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items', 'suggest_id' => 'suggest_id'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeyword::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem> Response field items */
    public array $items;

    /** @var string|null Response field suggest_id */
    public ?string $suggest_id = null;
}
