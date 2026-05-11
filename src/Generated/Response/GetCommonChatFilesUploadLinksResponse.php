<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [POST] /common/chats/files/upload_links.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-common-chat-files-upload-links
 */
class GetCommonChatFilesUploadLinksResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['expires_at' => 'expires_at', 'upload_url' => 'upload_url'];

    protected const REQUIRED_FIELDS = ['upload_url', 'expires_at'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonFilesUploadLinksResponse::class;

    /** @var string Время действия ссылки в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm` */
    public string $expires_at;

    /** @var string Ссылка для отправки файла POST запросом */
    public string $upload_url;
}
