<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonMessagePostFileUploadIds.
 */
class ChatsCommonMessagePostFileUploadIds extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['file_upload_ids' => 'file_upload_ids', 'idempotency_key' => 'idempotency_key'];

    protected const REQUIRED_FIELDS = ['file_upload_ids', 'idempotency_key'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string> Массив с upload_id отправленных файлов для чата. Значение upload_id отправленного [файла для чата по ссылке](#tag/Chaty/operation/get-common-chat-files-upload-links) */
    public array $file_upload_ids;

    /** @var string Уникальный ключ для каждого сообщения в формате UUID */
    public string $idempotency_key;
}
