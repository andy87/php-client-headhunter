<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /saved_searches/resumes.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-saved-resume-searches
 */
class GetSavedResumeSearchesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items', 'found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\SavedSearchesSavedSearchItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\SavedSearchesSavedSearchResponse::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SavedSearchesSavedSearchItem> Список сохраненных поисков вакансий/резюме */
    public array $items;

    /** @var int Найдено результатов */
    public int $found;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;
}
