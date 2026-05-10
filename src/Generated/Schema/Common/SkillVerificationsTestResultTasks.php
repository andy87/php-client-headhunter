<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SkillVerificationsTestResultTasks.
 */
class SkillVerificationsTestResultTasks extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['closed_answers' => 'closed_answers', 'opened_answer' => 'opened_answer', 'question' => 'question'];

    protected const REQUIRED_FIELDS = ['question', 'closed_answers'];

    protected const NULLABLE_FIELDS = ['opened_answer'];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>> Варианты ответов на закрытые вопросы */
    public array $closed_answers;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\SkillVerificationsOpenedAnswer|null Вариант ответа на открытый вопрос */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\SkillVerificationsOpenedAnswer $opened_answer = null;

    /** @var string Текст вопроса */
    public string $question;
}
