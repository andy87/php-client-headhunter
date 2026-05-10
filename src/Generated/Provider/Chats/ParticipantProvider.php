<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Chats;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetParticipantListPrompt;
use and_y87\ClientsHh\Generated\Prompt\PutParticipantListPrompt;
use and_y87\ClientsHh\Generated\Response\Chats\Participant\GetListResponse;
use and_y87\ClientsHh\Generated\Response\Chats\Participant\PutListResponse;

/**
 * Группа методов "participant" раздела HeadHunter API "Чаты".
 */
class ParticipantProvider extends BaseHhProvider
{
    /**
     * Получение списка участников чата
     *
     * OperationId: get-participant-list.
     * HTTP: GET /common/chats/{chat_id}/participants.
     *
     * @param GetParticipantListPrompt $prompt DTO запроса.
     *
     * @return GetListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getList(GetParticipantListPrompt $prompt): GetListResponse
    {
        /** @var GetListResponse $response */
        $response = $this->request($prompt, GetListResponse::class);

        return $response;
    }

    /**
     * Добавление участника в чат
     *
     * OperationId: put-participant-list.
     * HTTP: PUT /common/chats/{chat_id}/participants.
     *
     * @param PutParticipantListPrompt $prompt DTO запроса.
     *
     * @return PutListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putList(PutParticipantListPrompt $prompt): PutListResponse
    {
        /** @var PutListResponse $response */
        $response = $this->request($prompt, PutListResponse::class);

        return $response;
    }
}
