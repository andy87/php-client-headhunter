<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Chats;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\LeaveChatPrompt;
use Andy87\ClientsHh\Generated\Response\Chats\Leave\ChatResponse;

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
