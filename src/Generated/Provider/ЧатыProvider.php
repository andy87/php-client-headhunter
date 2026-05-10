<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\ChatMessageDeletePrompt;
use Andy87\ClientsHh\Generated\Prompt\ChatMessagePostPrompt;
use Andy87\ClientsHh\Generated\Prompt\ChatMessagePutPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetChatMessagesPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetCommonChatFilesConditionsPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetCommonChatFilesUploadLinksPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetCommonChatListPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetOrCreateChatWithoutVacancyCommonPrompt;
use Andy87\ClientsHh\Generated\Prompt\GetParticipantListPrompt;
use Andy87\ClientsHh\Generated\Prompt\LeaveChatPrompt;
use Andy87\ClientsHh\Generated\Prompt\PutParticipantListPrompt;
use Andy87\ClientsHh\Generated\Prompt\SetLastViewedMessagePrompt;
use Andy87\ClientsHh\Generated\Prompt\SetWritePossibilityCommonPrompt;
use Andy87\ClientsHh\Generated\Prompt\UnreadChatsCountPrompt;
use Andy87\ClientsHh\Generated\Response\ChatMessageDeleteResponse;
use Andy87\ClientsHh\Generated\Response\ChatMessagePostResponse;
use Andy87\ClientsHh\Generated\Response\ChatMessagePutResponse;
use Andy87\ClientsHh\Generated\Response\GetChatMessagesResponse;
use Andy87\ClientsHh\Generated\Response\GetCommonChatFilesConditionsResponse;
use Andy87\ClientsHh\Generated\Response\GetCommonChatFilesUploadLinksResponse;
use Andy87\ClientsHh\Generated\Response\GetCommonChatListResponse;
use Andy87\ClientsHh\Generated\Response\GetOrCreateChatWithoutVacancyCommonResponse;
use Andy87\ClientsHh\Generated\Response\GetParticipantListResponse;
use Andy87\ClientsHh\Generated\Response\LeaveChatResponse;
use Andy87\ClientsHh\Generated\Response\PutParticipantListResponse;
use Andy87\ClientsHh\Generated\Response\SetLastViewedMessageResponse;
use Andy87\ClientsHh\Generated\Response\SetWritePossibilityCommonResponse;
use Andy87\ClientsHh\Generated\Response\UnreadChatsCountResponse;

/**
 * Provider раздела HeadHunter API "Чаты".
 * @property-read Чаты\ChatProvider $chat
 * @property-read Чаты\CommonProvider $common
 * @property-read Чаты\LastProvider $last
 * @property-read Чаты\LeaveProvider $leave
 * @property-read Чаты\OrValueProvider $orValue
 * @property-read Чаты\ParticipantProvider $participant
 * @property-read Чаты\UnreadProvider $unread
 * @property-read Чаты\WriteProvider $write
 *
 */
class ЧатыProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'chat' => Чаты\ChatProvider::class,
        'common' => Чаты\CommonProvider::class,
        'last' => Чаты\LastProvider::class,
        'leave' => Чаты\LeaveProvider::class,
        'orValue' => Чаты\OrValueProvider::class,
        'participant' => Чаты\ParticipantProvider::class,
        'unread' => Чаты\UnreadProvider::class,
        'write' => Чаты\WriteProvider::class,
    ];

    /**
     * Удаление сообщения в чате
     *
     * OperationId: chat-message-delete.
     * HTTP: DELETE /common/chats/{chat_id}/messages/{message_id}.
     *
     * @param ChatMessageDeletePrompt $prompt DTO запроса.
     *
     * @return ChatMessageDeleteResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function chatMessageDelete(ChatMessageDeletePrompt $prompt): ChatMessageDeleteResponse
    {
        /** @var Чаты\ChatProvider $group */
        $group = $this->operationGroup('chat');

        return $group->messageDelete($prompt);
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
     * @return ChatMessagePostResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function chatMessagePost(ChatMessagePostPrompt $prompt): ChatMessagePostResponse
    {
        /** @var Чаты\ChatProvider $group */
        $group = $this->operationGroup('chat');

        return $group->messagePost($prompt);
    }

    /**
     * Изменение сообщения в чате
     *
     * OperationId: chat-message-put.
     * HTTP: PUT /common/chats/{chat_id}/messages/{message_id}.
     *
     * @param ChatMessagePutPrompt $prompt DTO запроса.
     *
     * @return ChatMessagePutResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function chatMessagePut(ChatMessagePutPrompt $prompt): ChatMessagePutResponse
    {
        /** @var Чаты\ChatProvider $group */
        $group = $this->operationGroup('chat');

        return $group->messagePut($prompt);
    }

    /**
     * Получение списка сообщений чата
     *
     * OperationId: get-chat-messages.
     * HTTP: GET /common/chats/{chat_id}/messages.
     *
     * @param GetChatMessagesPrompt $prompt DTO запроса.
     *
     * @return GetChatMessagesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getChatMessages(GetChatMessagesPrompt $prompt): GetChatMessagesResponse
    {
        /** @var Чаты\ChatProvider $group */
        $group = $this->operationGroup('chat');

        return $group->getMessages($prompt);
    }

    /**
     * Получить свойства файлов для чатов
     *
     * OperationId: get-common-chat-files-conditions.
     * HTTP: GET /common/chats/files/conditions.
     *
     * @param GetCommonChatFilesConditionsPrompt $prompt DTO запроса.
     *
     * @return GetCommonChatFilesConditionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCommonChatFilesConditions(GetCommonChatFilesConditionsPrompt $prompt): GetCommonChatFilesConditionsResponse
    {
        /** @var Чаты\CommonProvider $group */
        $group = $this->operationGroup('common');

        return $group->getChatFilesConditions($prompt);
    }

    /**
     * Получить ссылку для отправки файла в чат
     *
     * Получить ссылку для отправки файла в чат
     *
     * По полученной ссылке необходимо отправить POST-запрос с файлом и заголовком авторизации аналогичному запросам в api.
     * Файл нужно отправлять в теле с типом `form-data` и именем ключа `file`
     *
     * Пример curl запроса:
     * ```
     * curl --location 'https://example.com' \
     * --header 'Authorization: Bearer AUTHTOKEN' \
     * --form 'file=@"/path/to/file"'
     * ```
     * В ответ вам вернется код успешного ответа с upload_id
     * ```
     * 200:
     * {
     *   upload_id: "8abcdef8-4abc-4edf-1234-1234567890ab",
     *   ...
     * }
     * ```
     * Возможные ошибки при отправке файлов по ссылке
     *
     * При отсутствии авторизации:
     * ```
     * 403:
     * <html><title>403: Forbidden</title><body>403: Forbidden</body></html>
     * ```
     * При несоответствии формата файла
     * ```
     * 400:
     * {
     *   "errors": [
     *       {
     *           "type": "bad_argument",
     *           "value": "file"
     *       }
     *   ]
     * }
     * ```
     * При истечении срока существования ссылки
     * ```
     * 400:
     *     {
     *   "errors": [
     *       {
     *           "type": "bad_argument",
     *           "value": "state"
     *       }
     *   ]
     * }
     * ```
     *
     * OperationId: get-common-chat-files-upload-links.
     * HTTP: POST /common/chats/files/upload_links.
     *
     * @param GetCommonChatFilesUploadLinksPrompt $prompt DTO запроса.
     *
     * @return GetCommonChatFilesUploadLinksResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCommonChatFilesUploadLinks(GetCommonChatFilesUploadLinksPrompt $prompt): GetCommonChatFilesUploadLinksResponse
    {
        /** @var Чаты\CommonProvider $group */
        $group = $this->operationGroup('common');

        return $group->getChatFilesUploadLinks($prompt);
    }

    /**
     * Получить список чатов
     *
     * Пагинированный список чатов.
     *
     * **Сценарии отбора по вакансиям** (по умолчанию: `vacancy_status` = `all`, `filter_with_vacancy_ids` не задан):
     *
     * 1. `vacancy_status=all`, `filter_with_vacancy_ids=[1,2,3]` — чаты, привязанные к *любой* из перечисленных вакансий.
     * 2. `vacancy_status=with`, `filter_with_vacancy_ids` не задан (или `[]`) — чаты, у которых есть хотя бы одна вакансия (любая).
     * 3. `vacancy_status=without`, `filter_with_vacancy_ids` не задан (или `[]`) — только чаты «без вакансии».
     * 4. `vacancy_status=without`, `filter_with_vacancy_ids=[1,2,3]` — «без вакансии» **или** с одной из перечисленных вакансий (объединение, **ИЛИ**)
     *
     * OperationId: get-common-chat-list.
     * HTTP: GET /common/chats.
     *
     * @param GetCommonChatListPrompt $prompt DTO запроса.
     *
     * @return GetCommonChatListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getCommonChatList(GetCommonChatListPrompt $prompt): GetCommonChatListResponse
    {
        /** @var Чаты\CommonProvider $group */
        $group = $this->operationGroup('common');

        return $group->getChatList($prompt);
    }

    /**
     * Создание чата без вакансии
     *
     * Создание или получение чата между соискателем и работодателем без вакансии, с привязкой к резюме
     *
     * OperationId: get-or-create-chat-without-vacancy-common.
     * HTTP: POST /common/chats/without_vacancy.
     *
     * @param GetOrCreateChatWithoutVacancyCommonPrompt $prompt DTO запроса.
     *
     * @return GetOrCreateChatWithoutVacancyCommonResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getOrCreateChatWithoutVacancyCommon(GetOrCreateChatWithoutVacancyCommonPrompt $prompt): GetOrCreateChatWithoutVacancyCommonResponse
    {
        /** @var Чаты\OrValueProvider $group */
        $group = $this->operationGroup('orValue');

        return $group->getCreateChatWithoutVacancyCommon($prompt);
    }

    /**
     * Получение списка участников чата
     *
     * OperationId: get-participant-list.
     * HTTP: GET /common/chats/{chat_id}/participants.
     *
     * @param GetParticipantListPrompt $prompt DTO запроса.
     *
     * @return GetParticipantListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getParticipantList(GetParticipantListPrompt $prompt): GetParticipantListResponse
    {
        /** @var Чаты\ParticipantProvider $group */
        $group = $this->operationGroup('participant');

        return $group->getList($prompt);
    }

    /**
     * Покинуть чат
     *
     * OperationId: leave-chat.
     * HTTP: PUT /common/chats/{chat_id}/leave.
     *
     * @param LeaveChatPrompt $prompt DTO запроса.
     *
     * @return LeaveChatResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function leaveChat(LeaveChatPrompt $prompt): LeaveChatResponse
    {
        /** @var Чаты\LeaveProvider $group */
        $group = $this->operationGroup('leave');

        return $group->chat($prompt);
    }

    /**
     * Добавление участника в чат
     *
     * OperationId: put-participant-list.
     * HTTP: PUT /common/chats/{chat_id}/participants.
     *
     * @param PutParticipantListPrompt $prompt DTO запроса.
     *
     * @return PutParticipantListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function putParticipantList(PutParticipantListPrompt $prompt): PutParticipantListResponse
    {
        /** @var Чаты\ParticipantProvider $group */
        $group = $this->operationGroup('participant');

        return $group->putList($prompt);
    }

    /**
     * Установка последнего прочитанного сообщения
     *
     * OperationId: set-last-viewed-message.
     * HTTP: PUT /common/chats/{chat_id}/message/{message_id}/read.
     *
     * @param SetLastViewedMessagePrompt $prompt DTO запроса.
     *
     * @return SetLastViewedMessageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setLastViewedMessage(SetLastViewedMessagePrompt $prompt): SetLastViewedMessageResponse
    {
        /** @var Чаты\LastProvider $group */
        $group = $this->operationGroup('last');

        return $group->setViewedMessage($prompt);
    }

    /**
     * Запретить/разрешить переписку в чате соискателю
     *
     * OperationId: set-write-possibility-common.
     * HTTP: PUT /common/chats/{chat_id}/write_possibility.
     *
     * @param SetWritePossibilityCommonPrompt $prompt DTO запроса.
     *
     * @return SetWritePossibilityCommonResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setWritePossibilityCommon(SetWritePossibilityCommonPrompt $prompt): SetWritePossibilityCommonResponse
    {
        /** @var Чаты\WriteProvider $group */
        $group = $this->operationGroup('write');

        return $group->setPossibilityCommon($prompt);
    }

    /**
     * Получить количество непрочитанных чатов
     *
     * OperationId: unread-chats-count.
     * HTTP: GET /common/chats/counters/unread.
     *
     * @param UnreadChatsCountPrompt $prompt DTO запроса.
     *
     * @return UnreadChatsCountResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function unreadChatsCount(UnreadChatsCountPrompt $prompt): UnreadChatsCountResponse
    {
        /** @var Чаты\UnreadProvider $group */
        $group = $this->operationGroup('unread');

        return $group->chatsCount($prompt);
    }
}
