<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Chats;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\LeaveChatPrompt;
use and_y87\ClientsHh\Generated\Response\Chats\Leave\ChatResponse;

/**
 * Группа методов "leave" раздела HeadHunter API "Чаты".
 */
class LeaveProvider extends BaseHhProvider
{
    /**
     * Покинуть чат
     *
     * OperationId: leave-chat.
     * HTTP: PUT /common/chats/{chat_id}/leave.
     *
     * @param LeaveChatPrompt $prompt DTO запроса.
     *
     * @return ChatResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function chat(LeaveChatPrompt $prompt): ChatResponse
    {
        /** @var ChatResponse $response */
        $response = $this->request($prompt, ChatResponse::class);

        return $response;
    }
}
