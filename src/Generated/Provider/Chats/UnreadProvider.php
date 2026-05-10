<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Chats;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\UnreadChatsCountPrompt;
use and_y87\ClientsHh\Generated\Response\Chats\Unread\ChatsCountResponse;

/**
 * Группа методов "unread" раздела HeadHunter API "Чаты".
 */
class UnreadProvider extends BaseHhProvider
{
    /**
     * Получить количество непрочитанных чатов
     *
     * OperationId: unread-chats-count.
     * HTTP: GET /common/chats/counters/unread.
     *
     * @param UnreadChatsCountPrompt $prompt DTO запроса.
     *
     * @return ChatsCountResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function chatsCount(UnreadChatsCountPrompt $prompt): ChatsCountResponse
    {
        /** @var ChatsCountResponse $response */
        $response = $this->request($prompt, ChatsCountResponse::class);

        return $response;
    }
}
