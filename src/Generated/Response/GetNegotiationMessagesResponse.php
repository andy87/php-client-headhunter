<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /negotiations/{nid}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-messages
 */
class GetNegotiationMessagesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\NegotiationsMessagesGet::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsMessagesGetResponse::class;

    /** @var int Найдено результатов */
    public int $found;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsMessagesGet>|null Список сообщений */
    public ?array $items = null;
}
