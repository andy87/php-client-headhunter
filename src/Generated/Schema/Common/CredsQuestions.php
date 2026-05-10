<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter CredsQuestions.
 */
class CredsQuestions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'is_active' => 'is_active', 'possible_answers' => 'possible_answers', 'question_id' => 'question_id', 'question_title' => 'question_title', 'question_type' => 'question_type', 'required' => 'required', 'skip_title_at_view' => 'skip_title_at_view', 'view_title' => 'view_title'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['description', 'view_title'];

    protected const CASTS = [];

    /** @var string|null Описание вопроса */
    public ?string $description = null;

    /** @var bool|null Показан ли вопрос изначально, актуально для динамических вопросов */
    public ?bool $is_active = null;

    /** @var array<int, string>|null Возможные ответы на вопрос, гарантировано придут в поле answers */
    public ?array $possible_answers = null;

    /** @var string|null Идентификатор вопроса (совпадает с ключом объекта) */
    public ?string $question_id = null;

    /** @var string|null Текст вопроса отображаемый на форме */
    public ?string $question_title = null;

    /** @var string|null Возможность мульти выбора ответов на данный вопрос "single_choice" / "multi_select" */
    public ?string $question_type = null;

    /** @var bool|null Обязателен ли вопрос для получения ответа */
    public ?bool $required = null;

    /** @var bool|null Пропускать ли текст вопроса на просмотре, если false - ответы внутри placeholder, если true - просто перечисляем без текста вопроса */
    public ?bool $skip_title_at_view = null;

    /** @var string|null Текст вопроса на просмотре */
    public ?string $view_title = null;
}
