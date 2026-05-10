<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /common/chats/without_vacancy.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-or-create-chat-without-vacancy-common
 */
class GetOrCreateChatWithoutVacancyCommonPrompt extends PrivatePrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/common/chats/without_vacancy';

    protected const CONTENT_TYPE = 'application/json';

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'first_message' => 'first_message', 'resume_hash' => 'resume_hash'];

    protected const REQUIRED_FIELDS = ['first_message', 'resume_hash'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = ['first_message', 'resume_hash'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var string Текст сообщения */
    public string $first_message;

    /** @var string Хэш резюме, к которому будет привязан чат без вакансии */
    public string $resume_hash;
}
