<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-managers
 */
class GetEmployerManagersResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['found' => 'found', 'items' => 'items', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersEmployerManagerItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersResponse::class;

    /** @var int Response field found */
    public int $found;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersEmployerManagerItem> Response field items */
    public array $items;

    /** @var int Response field page */
    public int $page;

    /** @var int Response field pages */
    public int $pages;

    /** @var int Response field per_page */
    public int $per_page;
}
