<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /areas/{area_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-areas-from-specified
 */
class GetAreasFromSpecifiedPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/areas/{area_id}';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['additional_case' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['area_id' => 'area_id', 'additional_case' => 'additional_case', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['area_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['area_id'];

    protected const QUERY_FIELDS = ['additional_case', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор региона из справочника [/areas](#tag/Obshie-spravochniki/operation/get-areas) */
    public string $area_id;

    /** @var string|null Применимо только к русской локализации.

В дополнительном поле вернется название региона в указанном падеже. Поддерживается только значение `prepositional` — предложный падеж
 */
    public ?string $additional_case = null;

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
