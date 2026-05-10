<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /suggests/area_leaves.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-area-leaves-suggests
 */
class GetAreaLeavesSuggestsPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/suggests/area_leaves';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['text' => ['style' => 'form', 'explode' => true], 'area_id' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['text' => 'text', 'area_id' => 'area_id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['text'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['text', 'area_id', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Текст для поиска региона. Искомый текст должен быть длиной два или более символа и не более 3 000 символов */
    public string $text;

    /** @var string|null Идентификатор региона из [справочника](#tag/Obshie-spravochniki/operation/get-areas). Сужает подсказки поддеревом переданного идентификатора региона */
    public ?string $area_id = null;

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
