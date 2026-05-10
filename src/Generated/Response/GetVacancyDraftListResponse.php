<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/drafts.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-draft-list
 */
class GetVacancyDraftListResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['found' => 'found', 'items' => 'items', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftItems::class;

    /** @var int Response field found */
    public int $found;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyDraftVacancyDraftItem> Список черновиков */
    public array $items;

    /** @var int Response field page */
    public int $page;

    /** @var int Response field pages */
    public int $pages;

    /** @var int Response field per_page */
    public int $per_page;
}
