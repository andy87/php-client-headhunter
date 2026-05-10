<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonFilesConditionsResponse.
 */
class ChatsCommonFilesConditionsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['files_upload' => 'files_upload'];

    protected const REQUIRED_FIELDS = ['files_upload'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Свойства файлов для отправки в чат */
    public array $files_upload;
}
