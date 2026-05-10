<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [POST] /common/chats/{chat_id}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/chat-message-post
 */
class ChatMessagePostResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\IncludesId::class;

    /** @var string Идентификатор */
    public string $id;
}
