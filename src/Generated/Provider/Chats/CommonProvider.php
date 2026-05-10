<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Chats;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetCommonChatFilesConditionsPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetCommonChatFilesUploadLinksPrompt;
use and_y87\ClientsHh\Generated\Prompt\GetCommonChatListPrompt;
use and_y87\ClientsHh\Generated\Response\Chats\Common\GetChatFilesConditionsResponse;
use and_y87\ClientsHh\Generated\Response\Chats\Common\GetChatFilesUploadLinksResponse;
use and_y87\ClientsHh\Generated\Response\Chats\Common\GetChatListResponse;

/**
 * Группа методов "common" раздела HeadHunter API "Чаты".
 */
class CommonProvider extends BaseHhProvider
{
    /**
     * Получить свойства файлов для чатов
     *
     * OperationId: get-common-chat-files-conditions.
     * HTTP: GET /common/chats/files/conditions.
     *
     * @param GetCommonChatFilesConditionsPrompt $prompt DTO запроса.
     *
     * @return GetChatFilesConditionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getChatFilesConditions(GetCommonChatFilesConditionsPrompt $prompt): GetChatFilesConditionsResponse
    {
        /** @var GetChatFilesConditionsResponse $response */
        $response = $this->request($prompt, GetChatFilesConditionsResponse::class);

        return $response;
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
     * @return GetChatFilesUploadLinksResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getChatFilesUploadLinks(GetCommonChatFilesUploadLinksPrompt $prompt): GetChatFilesUploadLinksResponse
    {
        /** @var GetChatFilesUploadLinksResponse $response */
        $response = $this->request($prompt, GetChatFilesUploadLinksResponse::class);

        return $response;
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
     * @return GetChatListResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getChatList(GetCommonChatListPrompt $prompt): GetChatListResponse
    {
        /** @var GetChatListResponse $response */
        $response = $this->request($prompt, GetChatListResponse::class);

        return $response;
    }
}
