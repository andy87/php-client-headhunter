<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /clickme/statistics.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-clickme-statistics
 */
class GetClickmeStatisticsPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/clickme/statistics';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['date_from' => ['style' => 'form', 'explode' => true], 'date_to' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['date_from' => 'date_from', 'date_to' => 'date_to', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['date_from', 'date_to'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['date_from', 'date_to', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Дата, от которой нужно начать поиск. Значение указывается в формате [ISO 8601](#date-format) — `YYYY-MM-DD`
 */
    public string $date_from;

    /** @var string Дата, до которой нужно искать включительно. Значение указывается в формате [ISO 8601](#date-format) — `YYYY-MM-DD`
 */
    public string $date_to;

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
