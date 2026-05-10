<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ChatsCommonFilesUploadLinksResponse.
 */
class ChatsCommonFilesUploadLinksResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['expires_at' => 'expires_at', 'upload_url' => 'upload_url'];

    protected const REQUIRED_FIELDS = ['upload_url', 'expires_at'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Время действия ссылки в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm` */
    public string $expires_at;

    /** @var string Ссылка для отправки файла POST запросом */
    public string $upload_url;
}
