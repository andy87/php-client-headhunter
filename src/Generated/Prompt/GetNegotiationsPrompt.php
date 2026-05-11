<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /negotiations.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiations
 */
class GetNegotiationsPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/negotiations';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['page' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'order_by' => ['style' => 'form', 'explode' => true], 'order' => ['style' => 'form', 'explode' => true], 'vacancy_id' => ['style' => 'form', 'explode' => true], 'status' => ['style' => 'form', 'explode' => true], 'has_updates' => ['style' => 'form', 'explode' => true], 'with_job_search_status' => ['style' => 'form', 'explode' => true], 'with_generated_collections' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['page' => 'page', 'per_page' => 'per_page', 'order_by' => 'order_by', 'order' => 'order', 'vacancy_id' => 'vacancy_id', 'status' => 'status', 'has_updates' => 'has_updates', 'with_job_search_status' => 'with_job_search_status', 'with_generated_collections' => 'with_generated_collections', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['page', 'per_page', 'order_by', 'order', 'vacancy_id', 'status', 'has_updates', 'with_job_search_status', 'with_generated_collections', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var float|null Номер страницы */
    public ?float $page = null;

    /** @var float|null Количество элементов на странице */
    public ?float $per_page = null;

    /** @var string|null Тип сортировки. Возможные значения указаны в поле `negotiations_order` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $order_by = null;

    /** @var string|null Направление сортировки. Возможные значения: `asc` — по возрастанию, `desc` — по убыванию */
    public ?string $order = null;

    /** @var string|null Фильтр по ID вакансии. Обязательный для работодателя */
    public ?string $vacancy_id = null;

    /** @var string|null Запрос вернет только те отклики, которые находятся в определенном статусе.

Возможные значения указаны в поле `applicant_negotiation_status` [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public ?string $status = null;

    /** @var bool|null Если передан `true`, запрос вернет только те отклики, для которых есть непросмотренные сообщения. По умолчанию `false`
 */
    public ?bool $has_updates = null;

    /** @var bool|null Если передан `true`, запрос вернет статус поиска работы кандидатом
 */
    public ?bool $with_job_search_status = null;

    /** @var bool|null Если передан `true`, запрос вернет информацию по [сгенерированным коллекциям](#term-collection) откликов/приглашений для данной вакансии.

Чтобы получить выгрузку по нескольким коллекциям, запросите их последовательно. По умолчанию `false`
 */
    public ?bool $with_generated_collections = null;

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
