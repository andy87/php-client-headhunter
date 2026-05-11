<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/resume_search_keyword.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-resume-search-keywords-suggests
 */
class GetResumeSearchKeywordsSuggestsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items', 'suggest_id' => 'suggest_id'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeyword::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsSearchKeywordItem> Response field items */
    public array $items;

    /** @var string|null Response field suggest_id */
    public ?string $suggest_id = null;
}
