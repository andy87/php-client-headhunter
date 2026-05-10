<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Чаты;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\UnreadChatsCountPrompt;
use Andy87\ClientsHh\Generated\Response\Чаты\Unread\ChatsCountResponse;

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
