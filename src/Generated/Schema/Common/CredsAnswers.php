<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter CredsAnswers.
 */
class CredsAnswers extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['answer_group' => 'answer_group', 'answer_id' => 'answer_id', 'ask_questions_after' => 'ask_questions_after', 'description' => 'description', 'positive_title' => 'positive_title', 'skip_at_result' => 'skip_at_result', 'title' => 'title'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['description'];

    protected const CASTS = [];

    /** @var string|null Группа данного ответа, positive, negative, neutral */
    public ?string $answer_group = null;

    /** @var string|null Идентификатор ответа (совпадает с ключом объекта) */
    public ?string $answer_id = null;

    /** @var array<int, string>|null Вопросы которые нужно задать после использования пользователем данного ответа */
    public ?array $ask_questions_after = null;

    /** @var string|null Описание ответа */
    public ?string $description = null;

    /** @var string|null Текст ответа который можно использовать для отображения без самого вопроса */
    public ?string $positive_title = null;

    /** @var bool|null Нужно ли пропускать данный ответ на форме с отображением кредов пользователя */
    public ?bool $skip_at_result = null;

    /** @var string|null Текст ответа который нужно отрисовать для сбора ответов от пользователя */
    public ?string $title = null;
}
