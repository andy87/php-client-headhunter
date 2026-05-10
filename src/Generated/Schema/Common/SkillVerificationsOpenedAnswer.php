<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SkillVerificationsOpenedAnswer.
 */
class SkillVerificationsOpenedAnswer extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['mark' => 'mark', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['value', 'mark'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Дифференцированная оценка за ответ от работодателя:
* `UNFAIR` — 0 баллов;
* `FAIR` — 30 баллов;
* `GOOD` — 60 баллов;
* `EXCELLENT` — 100 баллов
 */
    public string $mark;

    /** @var string Ответ на вопрос */
    public string $value;
}
