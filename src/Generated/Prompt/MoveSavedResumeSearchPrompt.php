<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /saved_searches/resumes/{saved_search_id}/managers/{manager_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/move-saved-resume-search
 */
class MoveSavedResumeSearchPrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/saved_searches/resumes/{saved_search_id}/managers/{manager_id}';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['saved_search_id' => 'saved_search_id', 'manager_id' => 'manager_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['saved_search_id', 'manager_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['saved_search_id', 'manager_id'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор из [списка сохраненных поисков](#tag/Sohranennye-poiski-rezyume/operation/get-saved-resume-searches) */
    public string $saved_search_id;

    /** @var string Идентификатор менеджера, которому надо передать автопоиск ([список менеджеров компании](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers)) */
    public string $manager_id;

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
