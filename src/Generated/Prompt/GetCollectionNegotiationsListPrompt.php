<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /negotiations/response.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-collection-negotiations-list
 */
class GetCollectionNegotiationsListPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/negotiations/response';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['vacancy_id' => ['style' => 'form', 'explode' => true], 'order_by' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'age_from' => ['style' => 'form', 'explode' => true], 'age_to' => ['style' => 'form', 'explode' => true], 'area' => ['style' => 'form', 'explode' => true], 'citizenship' => ['style' => 'form', 'explode' => true], 'currency' => ['style' => 'form', 'explode' => true], 'driver_license_types' => ['style' => 'form', 'explode' => true], 'educational_institution' => ['style' => 'form', 'explode' => true], 'education_level' => ['style' => 'form', 'explode' => true], 'experience' => ['style' => 'form', 'explode' => true], 'gender' => ['style' => 'form', 'explode' => true], 'language' => ['style' => 'form', 'explode' => true], 'relocation' => ['style' => 'form', 'explode' => true], 'salary_from' => ['style' => 'form', 'explode' => true], 'salary_to' => ['style' => 'form', 'explode' => true], 'search_radius_meters' => ['style' => 'form', 'explode' => true], 'search_text' => ['style' => 'form', 'explode' => true], 'show_only_new_responses' => ['style' => 'form', 'explode' => true], 'show_only_with_vehicle' => ['style' => 'form', 'explode' => true], 'show_only_new' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['vacancy_id' => 'vacancy_id', 'order_by' => 'order_by', 'page' => 'page', 'per_page' => 'per_page', 'age_from' => 'age_from', 'age_to' => 'age_to', 'area' => 'area', 'citizenship' => 'citizenship', 'currency' => 'currency', 'driver_license_types' => 'driver_license_types', 'educational_institution' => 'educational_institution', 'education_level' => 'education_level', 'experience' => 'experience', 'gender' => 'gender', 'language' => 'language', 'relocation' => 'relocation', 'salary_from' => 'salary_from', 'salary_to' => 'salary_to', 'search_radius_meters' => 'search_radius_meters', 'search_text' => 'search_text', 'show_only_new_responses' => 'show_only_new_responses', 'show_only_with_vehicle' => 'show_only_with_vehicle', 'show_only_new' => 'show_only_new', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = ['vacancy_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['vacancy_id', 'order_by', 'page', 'per_page', 'age_from', 'age_to', 'area', 'citizenship', 'currency', 'driver_license_types', 'educational_institution', 'education_level', 'experience', 'gender', 'language', 'relocation', 'salary_from', 'salary_to', 'search_radius_meters', 'search_text', 'show_only_new_responses', 'show_only_with_vehicle', 'show_only_new', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string Идентификатор вакансии */
    public string $vacancy_id;

    /** @var string|null Тип сортировки. Возможные значения указаны в поле `order_types` [списка коллекций](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations)
 */
    public ?string $order_by = null;

    /** @var int|null Порядковый номер страницы в выдаче. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). По умолчанию нумерация начинается с 0 страницы
 */
    public ?int $page = null;

    /** @var int|null Количество элементов на странице выдачи. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). Максимальное значение — `50`
 */
    public ?int $per_page = null;

    /** @var string|null Нижняя граница возраста соискателя в годах */
    public ?string $age_from = null;

    /** @var string|null Верхняя граница возраста соискателя в годах */
    public ?string $age_to = null;

    /** @var string|null Регион. Возможные значения указаны в [справочнике регионов](#tag/Obshie-spravochniki/operation/get-areas). Можно указать несколько значений.

По умолчанию выбираются резюме, в которых соискатели живут в указанных регионах или готовы в них переехать. Поменять это поведение поиска можно, указав параметр `relocation`
 */
    public ?string $area = null;

    /** @var string|null Страна гражданства соискателя. Возможные значения перечислены в [справочнике стран](#tag/Obshie-spravochniki/operation/get-countries). Можно указать несколько значений
 */
    public ?string $citizenship = null;

    /** @var string|null Код валюты. Возможные значения перечислены в поле `currency.code` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public ?string $currency = null;

    /** @var string|null Категории водительских прав соискателя. Возможные значения перечислены в поле `driver_license_types` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $driver_license_types = null;

    /** @var string|null Учебные заведения соискателя. В качестве параметров используются [подсказки по названиям университетов](#tag/Podskazki/operation/get-educational-institutions-suggests). Можно указать несколько значений
 */
    public ?string $educational_institution = null;

    /** @var string|null Уровень образования. Возможные значения перечислены в поле `education_level` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Если параметр не указан, поиск ведется без ограничений на уровень образования
 */
    public ?string $education_level = null;

    /** @var string|null Опыт работы. Возможные значения перечислены в поле `experience` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $experience = null;

    /** @var string|null Пол соискателя. Возможные значения перечислены в поле `gender` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries).

По умолчанию вне зависимости от значения параметра будут найдены резюме, в которых пол не указан, исключить из поисковой выдачи такие резюме можно с помощью параметра `label=only_with_gender`
 */
    public ?string $gender = null;

    /** @var string|null Знание языка. Можно указать несколько значений. Задается в формате `language.level`, где:

* `language` — значение из [справочника языков](#tag/Obshie-spravochniki/operation/get-languages);
* `level` — значение поля language_level из [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries)

Например, `ita.c2`
 */
    public ?string $language = null;

    /** @var string|null Готовность к переезду. Возможные значения указаны в поле `resume_search_relocation` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Необходимо указывать вместе с параметром `area`
 */
    public ?string $relocation = null;

    /** @var float|null Нижняя граница желаемой заработной платы (ЗП) */
    public ?float $salary_from = null;

    /** @var float|null Верхняя граница желаемой заработной платы (ЗП) */
    public ?float $salary_to = null;

    /** @var float|null Расстояние до кандидата (в метрах) */
    public ?float $search_radius_meters = null;

    /** @var string|null Поисковая строка */
    public ?string $search_text = null;

    /** @var bool|null Показывать только непросмотренные отклики коллекции «Все неразобранные» (`/response`)
 */
    public ?bool $show_only_new_responses = null;

    /** @var bool|null Показывать соискателей с личным автомобилем */
    public ?bool $show_only_with_vehicle = null;

    /** @var bool|null Показывать только отклики, в которых есть непрочитанные сообщения для всех коллекций, кроме «Все неразобранные» (`/response`)
 */
    public ?bool $show_only_new = null;

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
