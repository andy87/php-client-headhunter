<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /common/chats/{chat_id}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/chat-message-post
 */
class ChatMessagePostPrompt extends PrivatePrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/common/chats/{chat_id}/messages';

    protected const CONTENT_TYPE = 'application/json';

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['chat_id' => 'chat_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'body' => 'body'];

    protected const REQUIRED_FIELDS = ['chat_id', 'body'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['body' => \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonMessagePost::class];

    protected const PATH_FIELDS = ['chat_id'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = 'body';

    /** @var string Идентификатор чата */
    public string $chat_id;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonMessagePost Request body */
    public \and_y87\ClientsHh\Generated\Schema\Common\ChatsCommonMessagePost $body;
}
