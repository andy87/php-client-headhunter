<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Chats;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\ChatMessageDeletePrompt;
use and_y87\ClientsHh\Generated\Prompt\ChatMessagePostPrompt;
use and_y87\ClientsHh\Generated\Prompt\ChatMessagePutPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetChatMessagesPrompt;
use and_y87\ClientsHh\Generated\Response\Chats\Chat\GetMessagesResponse;
use and_y87\ClientsHh\Generated\Response\Chats\Chat\MessageDeleteResponse;
use and_y87\ClientsHh\Generated\Response\Chats\Chat\MessagePostResponse;
use and_y87\ClientsHh\Generated\Response\Chats\Chat\MessagePutResponse;

/**
 * Группа методов "chat" раздела HeadHunter API "Чаты".
 */
class ChatProvider extends BaseHhProvider
{
    /**
     * Получение списка сообщений чата
     *
     * OperationId: get-chat-messages.
     * HTTP: GET /common/chats/{chat_id}/messages.
     *
     * @param GetChatMessagesPrompt $prompt DTO запроса.
     *
     * @return GetMessagesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getMessages(GetChatMessagesPrompt $prompt): GetMessagesResponse
    {
        /** @var GetMessagesResponse $response */
        $response = $this->request($prompt, GetMessagesResponse::class);

        return $response;
    }

    /**
     * Удаление сообщения в чате
     *
     * OperationId: chat-message-delete.
     * HTTP: DELETE /common/chats/{chat_id}/messages/{message_id}.
     *
     * @param ChatMessageDeletePrompt $prompt DTO запроса.
     *
     * @return MessageDeleteResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function messageDelete(ChatMessageDeletePrompt $prompt): MessageDeleteResponse
    {
        /** @var MessageDeleteResponse $response */
        $response = $this->request($prompt, MessageDeleteResponse::class);

        return $response;
    }

    /**
     * Отправить сообщение в чат
     *
     * Отправить сообщение в чат. Вместе с ключом идемпотентности возможно передавать только текст или только идентификаторы загруженных файлов
     *
     * OperationId: chat-message-post.
     * HTTP: POST /common/chats/{chat_id}/messages.
     *
     * @param ChatMessagePostPrompt $prompt DTO запроса.
     *
     * @return MessagePostResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function messagePost(ChatMessagePostPrompt $prompt): MessagePostResponse
    {
        /** @var MessagePostResponse $response */
        $response = $this->request($prompt, MessagePostResponse::class);

        return $response;
    }

    /**
     * Изменение сообщения в чате
     *
     * OperationId: chat-message-put.
     * HTTP: PUT /common/chats/{chat_id}/messages/{message_id}.
     *
     * @param ChatMessagePutPrompt $prompt DTO запроса.
     *
     * @return MessagePutResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function messagePut(ChatMessagePutPrompt $prompt): MessagePutResponse
    {
        /** @var MessagePutResponse $response */
        $response = $this->request($prompt, MessagePutResponse::class);

        return $response;
    }
}
