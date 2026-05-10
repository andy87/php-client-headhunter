<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\Chats\Participant;

use and_y87\ClientsHh\Generated\Response\GetParticipantListResponse as BaseGetParticipantListResponse;

/**
 * Ответ HeadHunter API [GET] /common/chats/{chat_id}/participants.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-participant-list
 *
 * @property array<int, array<string, mixed>> $items Список участников
 */
class GetListResponse extends BaseGetParticipantListResponse
{
}
