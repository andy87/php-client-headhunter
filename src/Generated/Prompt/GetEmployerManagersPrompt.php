<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/managers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-managers
 */
class GetEmployerManagersPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/employers/{employer_id}/managers';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['page' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'search_text' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['employer_id' => 'employer_id', 'page' => 'page', 'per_page' => 'per_page', 'search_text' => 'search_text', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['employer_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['employer_id'];

    protected const QUERY_FIELDS = ['page', 'per_page', 'search_text', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор работодателя, который можно узнать [в информации о текущем пользователе](#tag/Informaciya-o-menedzhere/operation/get-current-user-info) */
    public string $employer_id;

    /** @var float|null Номер страницы */
    public ?float $page = null;

    /** @var float|null Количество элементов */
    public ?float $per_page = null;

    /** @var string|null Поисковая строка по имени менеджера */
    public ?string $search_text = null;

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
