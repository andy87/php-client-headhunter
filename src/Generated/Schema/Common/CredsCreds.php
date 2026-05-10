<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter CredsCreds.
 */
class CredsCreds extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['answers' => 'answers', 'question_to_answer_map' => 'question_to_answer_map', 'questions' => 'questions'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field answers */
    public ?array $answers = null;

    /** @var array<string, mixed>|null Schema field question_to_answer_map */
    public ?array $question_to_answer_map = null;

    /** @var array<string, mixed>|null Schema field questions */
    public ?array $questions = null;
}
