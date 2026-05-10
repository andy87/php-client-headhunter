<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/search-employer
 */
class SearchEmployerPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/employers';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['text' => ['style' => 'form', 'explode' => true], 'area' => ['style' => 'form', 'explode' => true], 'type' => ['style' => 'form', 'explode' => true], 'only_with_vacancies' => ['style' => 'form', 'explode' => true], 'sort_by' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['text' => 'text', 'area' => 'area', 'type' => 'type', 'only_with_vacancies' => 'only_with_vacancies', 'sort_by' => 'sort_by', 'page' => 'page', 'per_page' => 'per_page', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['text', 'area', 'type', 'only_with_vacancies', 'sort_by', 'page', 'per_page', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Текст для поиска. Переданное значение ищется в названии и описании работодателя */
    public ?string $text = null;

    /** @var string|null Идентификатор региона работодателя, множественный параметр. Идентификаторы регионов можно узнать в [справочнике регионов](#tag/Obshie-spravochniki/operation/get-areas) */
    public ?string $area = null;

    /** @var string|null Тип работодателя, множественный параметр. Разрешенные значения перечислены в [справочнике](#tag/Obshie-spravochniki/operation/get-dictionaries) в поле `employer_type` */
    public ?string $type = null;

    /** @var bool|null Возвращать только работодателей у которых есть в данный момент открытые вакансии (`true`) или же всех (`false`). По умолчанию — `false` */
    public ?bool $only_with_vacancies = null;

    /** @var string|null Сортировка по имени (`by_name`) или по количеству открытых вакансий (`by_vacancies_open`). По умолчанию — `by_name` */
    public ?string $sort_by = null;

    /** @var float|null Номер страницы с работодателями (считается от `0`, по умолчанию — `0`) */
    public ?float $page = null;

    /** @var float|null Количество элементов на страницу (по умолчанию — 20, максимум — 100 ) */
    public ?float $per_page = null;

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
