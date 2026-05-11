<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /saved_searches/resumes/{id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/update-saved-resume-search
 */
class UpdateSavedResumeSearchPrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/saved_searches/resumes/{id}';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['name' => ['style' => 'form', 'explode' => true], 'subscription' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'subscription' => 'subscription', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['id'];

    protected const QUERY_FIELDS = ['name', 'subscription', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор сохраненного поиска */
    public string $id;

    /** @var string|null Новое имя сохраненного поиска */
    public ?string $name = null;

    /** @var bool|null Статус подписки */
    public ?bool $subscription = null;

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
