<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsResumeTooManyRequestsEmployerResumeSearchError.
 */
class ErrorsResumeTooManyRequestsEmployerResumeSearchError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string Описание ошибки. Возможные значения:
  * `daily_resume_search_limit_exceeded` — Дневной лимит поиска резюме через API для работодателя исчерпан. На сайте поиск доступен
 */
    public string $value;
}
