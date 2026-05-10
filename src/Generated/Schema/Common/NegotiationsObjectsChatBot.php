<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsObjectsChatBot.
 */
class NegotiationsObjectsChatBot extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['auto_survey' => 'auto_survey'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Вопрос-ответы на автоопрос */
    public ?array $auto_survey = null;
}
