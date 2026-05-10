<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /common/chats/{chat_id}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-chat-messages
 */
class GetChatMessagesPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/common/chats/{chat_id}/messages';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['start_message_id' => ['style' => 'form', 'explode' => true], 'limit' => ['style' => 'form', 'explode' => true], 'order' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['chat_id' => 'chat_id', 'start_message_id' => 'start_message_id', 'limit' => 'limit', 'order' => 'order', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['chat_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['chat_id'];

    protected const QUERY_FIELDS = ['start_message_id', 'limit', 'order', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор чата */
    public string $chat_id;

    /** @var string|null Идентификатор сообщения, с которого запрашивается список сообщений:

* для `order = next` по умолчанию `start_message_id` — первое сообщение в чате;
* для `order = prev` по умолчанию `start_message_id` — последнее сообщение в чате
 */
    public ?string $start_message_id = null;

    /** @var int|null Максимальное количество выводимых сообщений
 */
    public ?int $limit = null;

    /** @var string|null Порядок сообщений. Задает в каком порядке, начиная с сообщения с идентификатором `start_message_id`,
будет произведена выборка сообщений.
Например:
* при `order=next, start_message_id=100, limit=25` в ответе будут сообщения с идентификаторами `100`...`125`
* при `order=prev, start_message_id=100, limit=25` в ответе будут сообщения с идентификаторами `75`...`100`
 */
    public ?string $order = null;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;
}
