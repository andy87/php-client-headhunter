<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ErrorsChatsBadRequestError.
 */
class ErrorsChatsBadRequestError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reason' => 'reason', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'reason'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Описание причины возникновения ошибки:
* `spam_detected` — подозрение на спам или ненормативная лексика
* `required` — поле обязательное
* `text_or_file_upload_ids` — возможно передавать только текст или только идентификаторы загруженных файлов
* `temporary_disabled` — отправка файлов временно отключена
 */
    public string $reason;

    /** @var string Текстовый идентификатор типа ошибки */
    public string $type;
}
