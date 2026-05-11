<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /common/chats/{chat_id}/write_possibility.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/set-write-possibility-common
 */
class SetWritePossibilityCommonPrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/common/chats/{chat_id}/write_possibility';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['applicant_write_possibility' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['chat_id' => 'chat_id', 'applicant_write_possibility' => 'applicant_write_possibility', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['chat_id', 'applicant_write_possibility'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['chat_id'];

    protected const QUERY_FIELDS = ['applicant_write_possibility', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор чата */
    public string $chat_id;

    /** @var bool Флаг разрешенности переписки для соискателя */
    public bool $applicant_write_possibility;

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
