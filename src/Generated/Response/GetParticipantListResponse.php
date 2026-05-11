<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /common/chats/{chat_id}/participants.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-participant-list
 */
class GetParticipantListResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonParticipantListResponse::class;

    /** @var array<int, array<string, mixed>> Список участников */
    public array $items;
}
