<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /common/chats/files/conditions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-common-chat-files-conditions
 */
class GetCommonChatFilesConditionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['files_upload' => 'files_upload'];

    protected const REQUIRED_FIELDS = ['files_upload'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\ChatsCommonFilesConditionsResponse::class;

    /** @var array<string, mixed> Свойства файлов для отправки в чат */
    public array $files_upload;
}
