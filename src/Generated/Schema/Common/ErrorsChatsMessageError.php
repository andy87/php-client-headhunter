<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsChatsMessageError.
 */
class ErrorsChatsMessageError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reason' => 'reason', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Описание причины возникновения ошибки:
* `not integer value` - Переданное значение не является целым числом
* `bad_order` - Плохой параметр order
* `bad_start_message_id` - Плохой параметр start_message_id
* `bad_limit` - Плохой параметр limit
* `limit_negative_or_more_than_50` - Параметр limit < 0 либо > 50
 */
    public ?string $reason = null;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;
}
