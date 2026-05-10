<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\Chats\Common;

use and_y87\ClientsHh\Generated\Response\GetCommonChatFilesUploadLinksResponse as BaseGetCommonChatFilesUploadLinksResponse;

/**
 * Ответ HeadHunter API [POST] /common/chats/files/upload_links.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-common-chat-files-upload-links
 *
 * @property string $expires_at Время действия ссылки в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm`
 * @property string $upload_url Ссылка для отправки файла POST запросом
 */
class GetChatFilesUploadLinksResponse extends BaseGetCommonChatFilesUploadLinksResponse
{
}
