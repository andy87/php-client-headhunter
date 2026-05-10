<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /negotiations/{collection_name}/{nid}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/change-negotiation-action
 */
class ChangeNegotiationActionPrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/negotiations/{collection_name}/{nid}';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['collection_name' => 'collection_name', 'nid' => 'nid', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['collection_name', 'nid'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['collection_name', 'nid'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Название коллекции. Возможные значения указаны в поле `collections[].id` [списка коллекций](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations)
 */
    public string $collection_name;

    /** @var string Идентификатор отклика */
    public string $nid;

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
