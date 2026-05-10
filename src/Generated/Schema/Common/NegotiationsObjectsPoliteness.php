<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsObjectsPoliteness.
 */
class NegotiationsObjectsPoliteness extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['article_url' => 'article_url', 'description' => 'description', 'hint' => 'hint', 'index' => 'index', 'index_change' => 'index_change'];

    protected const REQUIRED_FIELDS = ['index', 'index_change', 'hint', 'description', 'article_url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string URL на статью HH про индекс вежливости */
    public string $article_url;

    /** @var string Описание понятия индекса вежливости */
    public string $description;

    /** @var string Описание текущего значения индекса вежливости */
    public string $hint;

    /** @var float Значение индекса вежливости */
    public float $index;

    /** @var float Изменение индекса вежливости за последние 24 часа */
    public float $index_change;
}
