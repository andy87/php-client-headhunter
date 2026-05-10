<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /common/chats/{chat_id}/message/{message_id}/read.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/set-last-viewed-message
 */
class SetLastViewedMessagePrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/common/chats/{chat_id}/message/{message_id}/read';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['chat_id' => 'chat_id', 'message_id' => 'message_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['chat_id', 'message_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['chat_id', 'message_id'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор чата */
    public string $chat_id;

    /** @var string Идентификатор сообщения */
    public string $message_id;

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
