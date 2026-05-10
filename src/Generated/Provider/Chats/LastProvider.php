<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Chats;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\SetLastViewedMessagePrompt;
use and_y87\ClientsHh\Generated\Response\Chats\Last\SetViewedMessageResponse;

/**
 * Группа методов "last" раздела HeadHunter API "Чаты".
 */
class LastProvider extends BaseHhProvider
{
    /**
     * Установка последнего прочитанного сообщения
     *
     * OperationId: set-last-viewed-message.
     * HTTP: PUT /common/chats/{chat_id}/message/{message_id}/read.
     *
     * @param SetLastViewedMessagePrompt $prompt DTO запроса.
     *
     * @return SetViewedMessageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setViewedMessage(SetLastViewedMessagePrompt $prompt): SetViewedMessageResponse
    {
        /** @var SetViewedMessageResponse $response */
        $response = $this->request($prompt, SetViewedMessageResponse::class);

        return $response;
    }
}
