<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /saved_searches/resumes/{id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-saved-resume-search
 */
class GetSavedResumeSearchResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['created_at' => 'created_at', 'id' => 'id', 'items' => 'items', 'name' => 'name', 'new_items' => 'new_items', 'subscription' => 'subscription'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'created_at', 'subscription', 'items', 'new_items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesCountUrl::class, 'new_items' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesCountUrl::class];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\SavedSearchesSavedSearchItem::class;

    /** @var string Дата и время создания */
    public string $created_at;

    /** @var string Идентификатор поиска */
    public string $id;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesCountUrl Response field items */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesCountUrl $items;

    /** @var string Название поиска */
    public string $name;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesCountUrl Response field new_items */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesCountUrl $new_items;

    /** @var bool Статус подписки */
    public bool $subscription;
}
