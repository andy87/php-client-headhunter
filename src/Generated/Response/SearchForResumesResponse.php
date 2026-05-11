<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /resumes.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/search-for-resumes
 */
class SearchForResumesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['found', 'page', 'pages', 'per_page', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumesSearchForResumesItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\ResumesSearchForResumesResponse::class;

    /** @var int Найдено результатов */
    public int $found;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumesSearchForResumesItem> Массив найденных резюме */
    public array $items;
}
