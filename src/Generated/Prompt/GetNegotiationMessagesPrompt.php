<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /negotiations/{nid}/messages.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiation-messages
 */
class GetNegotiationMessagesPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/negotiations/{nid}/messages';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['page' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'with_text_only' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['page' => 'page', 'per_page' => 'per_page', 'nid' => 'nid', 'with_text_only' => 'with_text_only', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['nid'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['nid'];

    protected const QUERY_FIELDS = ['page', 'per_page', 'with_text_only', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var float|null Номер страницы */
    public ?float $page = null;

    /** @var float|null Количество элементов */
    public ?float $per_page = null;

    /** @var string Идентификатор отклика */
    public string $nid;

    /** @var bool|null Вернуть непустые сообщения (содержат текст в параметре `text`) */
    public ?bool $with_text_only = null;

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
