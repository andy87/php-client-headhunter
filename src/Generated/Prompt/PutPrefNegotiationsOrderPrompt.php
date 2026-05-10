<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [PUT] /vacancies/{id}/preferred_negotiations_order.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/put-pref-negotiations-order
 */
class PutPrefNegotiationsOrderPrompt extends PrivatePrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/vacancies/{id}/preferred_negotiations_order';

    protected const CONTENT_TYPE = 'application/x-www-form-urlencoded';

    protected const QUERY_PARAMETER_STYLES = ['host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['id' => 'id', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent', 'order' => 'order'];

    protected const REQUIRED_FIELDS = ['id', 'order'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['id'];

    protected const QUERY_FIELDS = ['host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = ['order'];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор вакансии */
    public string $id;

    /** @var string|null Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 */
    public ?string $host = null;

    /** @var string|null Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 */
    public ?string $locale = null;

    /** @var string|null Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
    public ?string $HH_User_Agent = null;

    /** @var string Идентификатор типа сортировки. Возможные значения представлены в поле `order_types` [коллекции откликов и приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations). Не все типы сортировки из списка доступны для изменения */
    public string $order;
}
