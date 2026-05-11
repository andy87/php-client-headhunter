<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/search-employer
 */
class SearchEmployerResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['found' => 'found', 'items' => 'items', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployerItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployersList::class;

    /** @var int Найдено результатов */
    public int $found;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployersEmployerItem> Найденные работодатели */
    public array $items;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;
}
