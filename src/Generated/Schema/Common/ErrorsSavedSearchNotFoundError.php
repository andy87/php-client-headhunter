<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsSavedSearchNotFoundError.
 */
class ErrorsSavedSearchNotFoundError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;

    /** @var string|null Название поля запроса с ошибкой. Возможные значения:
* `saved_search_not_found` — автопоиск не найден или не принадлежит текущему пользователю.
* `manager_not_found` — менеджер не найден
 */
    public ?string $value = null;
}
