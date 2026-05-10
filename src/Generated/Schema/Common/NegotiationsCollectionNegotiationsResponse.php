<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsCollectionNegotiationsResponse.
 */
class NegotiationsCollectionNegotiationsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['ordered_by' => 'ordered_by', 'found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page', 'hidden_count' => 'hidden_count', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['ordered_by', 'found', 'page', 'pages', 'per_page', 'items'];

    protected const NULLABLE_FIELDS = ['hidden_count'];

    protected const CASTS = ['ordered_by' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName Применяемый тип сортировки */
    public \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName $ordered_by;

    /** @var int Найдено результатов */
    public int $found;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;

    /** @var int|null Количество скрытых откликов/приглашений */
    public ?int $hidden_count = null;

    /** @var array<int, mixed> Schema field items */
    public array $items;
}
