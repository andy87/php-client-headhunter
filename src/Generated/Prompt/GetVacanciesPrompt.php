<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /vacancies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancies
 */
class GetVacanciesPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/vacancies';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['page' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'text' => ['style' => 'form', 'explode' => true], 'search_field' => ['style' => 'form', 'explode' => true], 'experience' => ['style' => 'form', 'explode' => true], 'employment' => ['style' => 'form', 'explode' => true], 'schedule' => ['style' => 'form', 'explode' => true], 'area' => ['style' => 'form', 'explode' => true], 'metro' => ['style' => 'form', 'explode' => true], 'professional_role' => ['style' => 'form', 'explode' => true], 'industry' => ['style' => 'form', 'explode' => true], 'employer_id' => ['style' => 'form', 'explode' => true], 'currency' => ['style' => 'form', 'explode' => true], 'salary' => ['style' => 'form', 'explode' => true], 'salary_frequency' => ['style' => 'form', 'explode' => true], 'salary_mode' => ['style' => 'form', 'explode' => true], 'label' => ['style' => 'form', 'explode' => true], 'only_with_salary' => ['style' => 'form', 'explode' => true], 'period' => ['style' => 'form', 'explode' => true], 'date_from' => ['style' => 'form', 'explode' => true], 'date_to' => ['style' => 'form', 'explode' => true], 'top_lat' => ['style' => 'form', 'explode' => true], 'bottom_lat' => ['style' => 'form', 'explode' => true], 'left_lng' => ['style' => 'form', 'explode' => true], 'right_lng' => ['style' => 'form', 'explode' => true], 'order_by' => ['style' => 'form', 'explode' => true], 'sort_point_lat' => ['style' => 'form', 'explode' => true], 'sort_point_lng' => ['style' => 'form', 'explode' => true], 'clusters' => ['style' => 'form', 'explode' => true], 'describe_arguments' => ['style' => 'form', 'explode' => true], 'no_magic' => ['style' => 'form', 'explode' => true], 'premium' => ['style' => 'form', 'explode' => true], 'responses_count_enabled' => ['style' => 'form', 'explode' => true], 'part_time' => ['style' => 'form', 'explode' => true], 'accept_temporary' => ['style' => 'form', 'explode' => true], 'employment_form' => ['style' => 'form', 'explode' => true], 'work_schedule_by_days' => ['style' => 'form', 'explode' => true], 'working_hours' => ['style' => 'form', 'explode' => true], 'work_format' => ['style' => 'form', 'explode' => true], 'excluded_text' => ['style' => 'form', 'explode' => true], 'education' => ['style' => 'form', 'explode' => true], 'driver_license_types' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['page' => 'page', 'per_page' => 'per_page', 'text' => 'text', 'search_field' => 'search_field', 'experience' => 'experience', 'employment' => 'employment', 'schedule' => 'schedule', 'area' => 'area', 'metro' => 'metro', 'professional_role' => 'professional_role', 'industry' => 'industry', 'employer_id' => 'employer_id', 'currency' => 'currency', 'salary' => 'salary', 'salary_frequency' => 'salary_frequency', 'salary_mode' => 'salary_mode', 'label' => 'label', 'only_with_salary' => 'only_with_salary', 'period' => 'period', 'date_from' => 'date_from', 'date_to' => 'date_to', 'top_lat' => 'top_lat', 'bottom_lat' => 'bottom_lat', 'left_lng' => 'left_lng', 'right_lng' => 'right_lng', 'order_by' => 'order_by', 'sort_point_lat' => 'sort_point_lat', 'sort_point_lng' => 'sort_point_lng', 'clusters' => 'clusters', 'describe_arguments' => 'describe_arguments', 'no_magic' => 'no_magic', 'premium' => 'premium', 'responses_count_enabled' => 'responses_count_enabled', 'part_time' => 'part_time', 'accept_temporary' => 'accept_temporary', 'employment_form' => 'employment_form', 'work_schedule_by_days' => 'work_schedule_by_days', 'working_hours' => 'working_hours', 'work_format' => 'work_format', 'excluded_text' => 'excluded_text', 'education' => 'education', 'driver_license_types' => 'driver_license_types', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['page', 'per_page', 'text', 'search_field', 'experience', 'employment', 'schedule', 'area', 'metro', 'professional_role', 'industry', 'employer_id', 'currency', 'salary', 'salary_frequency', 'salary_mode', 'label', 'only_with_salary', 'period', 'date_from', 'date_to', 'top_lat', 'bottom_lat', 'left_lng', 'right_lng', 'order_by', 'sort_point_lat', 'sort_point_lng', 'clusters', 'describe_arguments', 'no_magic', 'premium', 'responses_count_enabled', 'part_time', 'accept_temporary', 'employment_form', 'work_schedule_by_days', 'working_hours', 'work_format', 'excluded_text', 'education', 'driver_license_types', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var float|null Номер страницы */
    public ?float $page = null;

    /** @var float|null Количество элементов */
    public ?float $per_page = null;

    /** @var string|null Переданное значение ищется в полях вакансии, указанных в параметре `search_field`. Доступен [язык запросов](https://hh.ru/article/1175). Специально для этого поля есть [автодополнение](#tag/Podskazki-po-klyuchevym-slovam/operation/get-vacancy-search-keywords) */
    public ?string $text = null;

    /** @var string|null Область поиска. Справочник с возможными значениями: `vacancy_search_fields` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries).
По умолчанию, используются все поля. Можно указать несколько значений
 */
    public ?string $search_field = null;

    /** @var string|null Опыт работы. Необходимо передавать `id` из справочника `experience` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $experience = null;

    /** @var string|null Тип занятости. Необходимо передавать `id` из справочника `employment` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений

Заменен на параметры `employment_form` и `label`
 */
    public ?string $employment = null;

    /** @var string|null График работы. Необходимо передавать `id` из справочника `schedule` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений

Заменен на параметры `work_schedule_by_days`, `work_format` и `employment_form`
 */
    public ?string $schedule = null;

    /** @var string|null Регион. Необходимо передавать `id` из справочника [/areas](#tag/Obshie-spravochniki/operation/get-areas). Можно указать несколько значений
 */
    public ?string $area = null;

    /** @var string|null Ветка или станция метро. Необходимо передавать `id` из справочника [/metro](#tag/Obshie-spravochniki/operation/get-metro-stations). Можно указать несколько значений
 */
    public ?string $metro = null;

    /** @var string|null Профессиональная область. Необходимо передавать `id` из справочника [/professional_roles](#tag/Obshie-spravochniki/operation/get-professional-roles-dictionary)
 */
    public ?string $professional_role = null;

    /** @var string|null Индустрия компании, разместившей вакансию. Необходимо передавать `id` из справочника [/industries](#tag/Obshie-spravochniki/operation/get-industries). Можно указать несколько значений
 */
    public ?string $industry = null;

    /** @var string|null Идентификатор [работодателя](#tag/Rabotodatel). Можно указать несколько значений
 */
    public ?string $employer_id = null;

    /** @var string|null Код валюты. Справочник с возможными значениями: `currency` (ключ `code`) в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Имеет смысл указывать только совместно с параметром `salary`
 */
    public ?string $currency = null;

    /** @var float|null Размер заработной платы. Если указано это поле, но не указано `currency`, то для `currency` используется значение RUR.
При указании значения будут найдены вакансии, в которых вилка зарплаты близка к указанной в запросе. При этом значения пересчитываются по текущим курсам ЦБ РФ. Например, при указании `salary=100&currency=EUR` будут найдены вакансии, где вилка зарплаты указана в рублях и после пересчёта в Евро близка к 100 EUR.
По умолчанию будут также найдены вакансии, в которых вилка зарплаты не указана, чтобы такие вакансии отфильтровать, используйте `only_with_salary=true`
 */
    public ?float $salary = null;

    /** @var string|null Частота выплат. Необходимо передавать `id` из справочника `salary_range_frequency` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $salary_frequency = null;

    /** @var string|null Гранулярность зарплаты. Необходимо передавать `id` из справочника `salary_range_mode` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать одно значение
 */
    public ?string $salary_mode = null;

    /** @var string|null Фильтр по меткам вакансий. Необходимо передавать `id` из справочника `vacancy_label` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $label = null;

    /** @var bool|null Показывать вакансии только с указанием зарплаты

Заменен на параметр `label=with_salary`
 */
    public ?bool $only_with_salary = null;

    /** @var float|null Количество дней, в пределах которых производится поиск по вакансиям
 */
    public ?float $period = null;

    /** @var string|null Дата, которая ограничивает снизу диапазон дат публикации вакансий. Нельзя передавать вместе с параметром `period`.
Значение указывается в формате ISO 8601 (`YYYY-MM-DD`) или с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`. Указанное значение будет округлено до ближайших пяти минут
 */
    public ?string $date_from = null;

    /** @var string|null Дата, которая ограничивает сверху диапазон дат публикации вакансий. Нельзя передавать вместе с параметром `period`.
Значение указывается в формате ISO 8601 (`YYYY-MM-DD`) или с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`. Указанное значение будет округлено до ближайших пяти минут
 */
    public ?string $date_to = null;

    /** @var float|null Верхняя граница широты.
При поиске используется значение указанного в вакансии адреса. Принимаемое значение — градусы в виде десятичной дроби.
Необходимо передавать одновременно все четыре параметра гео-координат, иначе вернется ошибка
 */
    public ?float $top_lat = null;

    /** @var float|null Нижняя граница широты.
При поиске используется значение указанного в вакансии адреса. Принимаемое значение — градусы в виде десятичной дроби.
Необходимо передавать одновременно все четыре параметра гео-координат, иначе вернется ошибка
 */
    public ?float $bottom_lat = null;

    /** @var float|null Левая граница долготы.
При поиске используется значение указанного в вакансии адреса. Принимаемое значение — градусы в виде десятичной дроби.
Необходимо передавать одновременно все четыре параметра гео-координат, иначе вернется ошибка
 */
    public ?float $left_lng = null;

    /** @var float|null Правая граница долготы.
При поиске используется значение указанного в вакансии адреса. Принимаемое значение — градусы в виде десятичной дроби.
Необходимо передавать одновременно все четыре параметра гео-координат, иначе вернется ошибка
 */
    public ?float $right_lng = null;

    /** @var string|null Сортировка списка вакансий. Справочник с возможными значениями: `vacancy_search_order` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries).
Если выбрана сортировка по удалённости от гео-точки `distance`, необходимо также задать её координаты: `sort_point_lat`, `sort_point_lng`
 */
    public ?string $order_by = null;

    /** @var float|null Значение географической широты точки, по расстоянию от которой будут отсортированы вакансии. Необходимо указывать только, если `order_by` установлено в `distance`
 */
    public ?float $sort_point_lat = null;

    /** @var float|null Значение географической долготы точки, по расстоянию от которой будут отсортированы вакансии. Необходимо указывать только, если `order_by` установлено в `distance`
 */
    public ?float $sort_point_lng = null;

    /** @var bool|null Возвращать ли [кластеры для данного поиска](#tag/Poisk-vakansij/Klastery-v-poiske-vakansij)
 */
    public ?bool $clusters = null;

    /** @var bool|null Возвращать ли описание использованных параметров поиска (массив `arguments`)
 */
    public ?bool $describe_arguments = null;

    /** @var bool|null Если значение `true` — автоматическое преобразование вакансий отключено.
При включённом автоматическом преобразовании, будет предпринята попытка изменить текстовый запрос пользователя на набор параметров. Например, запрос `text=москва бухгалтер 100500` будет преобразован в `text=бухгалтер&only_with_salary=true&area=1&salary=100500`
 */
    public ?bool $no_magic = null;

    /** @var bool|null Если значение `true` — в сортировке вакансий будет учтены премиум-вакансии. Такая сортировка используется на сайте
 */
    public ?bool $premium = null;

    /** @var bool|null Если значение `true` — дополнительное поле `counters` с количеством откликов для вакансии включено
 */
    public ?bool $responses_count_enabled = null;

    /** @var string|null Вакансии для подработки. Возможные значения:
* Все элементы из `working_days` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries).
* Все элементы из `working_time_intervals` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries).
* Все элементы из `working_time_modes` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries).
* Элементы `part` или `project` из `employment` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries).
* Элемент `accept_temporary`, показывает вакансии только с временным трудоустройством.


Можно указать несколько значений

Заменен на параметры `working_hours`, `work_schedule_by_days`, `employment_form` и `label`
 */
    public ?string $part_time = null;

    /** @var bool|null Если значение `true` — то поиск происходит только по вакансиям временной работы
 */
    public ?bool $accept_temporary = null;

    /** @var string|null Тип занятости. Необходимо передавать `id` из справочника `vacancy_search_employment_form` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $employment_form = null;

    /** @var string|null График работы. Необходимо передавать `id` из справочника `work_schedule_by_days` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $work_schedule_by_days = null;

    /** @var string|null Рабочие часы в день. Необходимо передавать `id` из справочника `working_hours` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $working_hours = null;

    /** @var string|null Формат работы. Необходимо передавать `id` из справочника `work_format` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $work_format = null;

    /** @var string|null Исключить слова. Из результата будут исключены вакансии, содержащие слова, переданные в этом параметре. Слова разделяются запятой
 */
    public ?string $excluded_text = null;

    /** @var string|null Образование. Можно указать несколько значений. Возможные значения:
* `not_required_or_not_specified` - не требуется или не указано
* `special_secondary` - среднее специальное
* `higher` - высшее
 */
    public ?string $education = null;

    /** @var string|null Категория водительских прав. Необходимо передавать `id` из справочника `driver_license_types` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $driver_license_types = null;

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
