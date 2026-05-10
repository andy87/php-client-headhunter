<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsAuthor.
 */
class NegotiationsAuthor extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['participant_type' => 'participant_type'];

    protected const REQUIRED_FIELDS = ['participant_type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Тип собеседника: `applicant` или `employer` */
    public string $participant_type;
}
