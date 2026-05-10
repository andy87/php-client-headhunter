<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Чаты\Participant;

use Andy87\ClientsHh\Generated\Response\GetParticipantListResponse as BaseGetParticipantListResponse;

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
