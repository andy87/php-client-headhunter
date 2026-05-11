<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\PrivatePrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /resumes.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/search-for-resumes
 */
class SearchForResumesPrompt extends PrivatePrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/resumes';

    protected const CONTENT_TYPE = null;

    protected const QUERY_PARAMETER_STYLES = ['text' => ['style' => 'form', 'explode' => true], 'text.logic' => ['style' => 'form', 'explode' => true], 'text.field' => ['style' => 'form', 'explode' => true], 'text.period' => ['style' => 'form', 'explode' => true], 'text.company_size' => ['style' => 'form', 'explode' => true], 'text.industry' => ['style' => 'form', 'explode' => true], 'age_from' => ['style' => 'form', 'explode' => true], 'age_to' => ['style' => 'form', 'explode' => true], 'area' => ['style' => 'form', 'explode' => true], 'relocation' => ['style' => 'form', 'explode' => true], 'period' => ['style' => 'form', 'explode' => true], 'date_from' => ['style' => 'form', 'explode' => true], 'date_to' => ['style' => 'form', 'explode' => true], 'education_level' => ['style' => 'form', 'explode' => true], 'employment' => ['style' => 'form', 'explode' => true], 'experience' => ['style' => 'form', 'explode' => true], 'skill' => ['style' => 'form', 'explode' => true], 'gender' => ['style' => 'form', 'explode' => true], 'label' => ['style' => 'form', 'explode' => true], 'language' => ['style' => 'form', 'explode' => true], 'metro' => ['style' => 'form', 'explode' => true], 'currency' => ['style' => 'form', 'explode' => true], 'salary_from' => ['style' => 'form', 'explode' => true], 'salary_to' => ['style' => 'form', 'explode' => true], 'schedule' => ['style' => 'form', 'explode' => true], 'order_by' => ['style' => 'form', 'explode' => true], 'citizenship' => ['style' => 'form', 'explode' => true], 'work_ticket' => ['style' => 'form', 'explode' => true], 'educational_institution' => ['style' => 'form', 'explode' => true], 'search_in_responses' => ['style' => 'form', 'explode' => true], 'by_text_prefix' => ['style' => 'form', 'explode' => true], 'driver_license_types' => ['style' => 'form', 'explode' => true], 'vacancy_id' => ['style' => 'form', 'explode' => true], 'page' => ['style' => 'form', 'explode' => true], 'per_page' => ['style' => 'form', 'explode' => true], 'professional_role' => ['style' => 'form', 'explode' => true], 'folder' => ['style' => 'form', 'explode' => true], 'include_all_folders' => ['style' => 'form', 'explode' => true], 'job_search_status' => ['style' => 'form', 'explode' => true], 'resume' => ['style' => 'form', 'explode' => true], 'filter_exp_industry' => ['style' => 'form', 'explode' => true], 'filter_exp_period' => ['style' => 'form', 'explode' => true], 'with_job_search_status' => ['style' => 'form', 'explode' => true], 'education_levels' => ['style' => 'form', 'explode' => true], 'district' => ['style' => 'form', 'explode' => true], 'saved_search_id' => ['style' => 'form', 'explode' => true], 'search_by_vacancy_id' => ['style' => 'form', 'explode' => true], 'last_used_timestamp' => ['style' => 'form', 'explode' => true], 'last_used' => ['style' => 'form', 'explode' => true], 'business_trip_readiness' => ['style' => 'form', 'explode' => true], 'host' => ['style' => 'form', 'explode' => true], 'locale' => ['style' => 'form', 'explode' => true]];

    protected const FIELD_MAP = ['text' => 'text', 'text_logic' => 'text.logic', 'text_field' => 'text.field', 'text_period' => 'text.period', 'text_company_size' => 'text.company_size', 'text_industry' => 'text.industry', 'age_from' => 'age_from', 'age_to' => 'age_to', 'area' => 'area', 'relocation' => 'relocation', 'period' => 'period', 'date_from' => 'date_from', 'date_to' => 'date_to', 'education_level' => 'education_level', 'employment' => 'employment', 'experience' => 'experience', 'skill' => 'skill', 'gender' => 'gender', 'label' => 'label', 'language' => 'language', 'metro' => 'metro', 'currency' => 'currency', 'salary_from' => 'salary_from', 'salary_to' => 'salary_to', 'schedule' => 'schedule', 'order_by' => 'order_by', 'citizenship' => 'citizenship', 'work_ticket' => 'work_ticket', 'educational_institution' => 'educational_institution', 'search_in_responses' => 'search_in_responses', 'by_text_prefix' => 'by_text_prefix', 'driver_license_types' => 'driver_license_types', 'vacancy_id' => 'vacancy_id', 'page' => 'page', 'per_page' => 'per_page', 'professional_role' => 'professional_role', 'folder' => 'folder', 'include_all_folders' => 'include_all_folders', 'job_search_status' => 'job_search_status', 'resume' => 'resume', 'filter_exp_industry' => 'filter_exp_industry', 'filter_exp_period' => 'filter_exp_period', 'with_job_search_status' => 'with_job_search_status', 'education_levels' => 'education_levels', 'district' => 'district', 'saved_search_id' => 'saved_search_id', 'search_by_vacancy_id' => 'search_by_vacancy_id', 'last_used_timestamp' => 'last_used_timestamp', 'last_used' => 'last_used', 'business_trip_readiness' => 'business_trip_readiness', 'host' => 'host', 'locale' => 'locale', 'HH_User_Agent' => 'HH-User-Agent'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = ['text', 'text_logic', 'text_field', 'text_period', 'text_company_size', 'text_industry', 'age_from', 'age_to', 'area', 'relocation', 'period', 'date_from', 'date_to', 'education_level', 'employment', 'experience', 'skill', 'gender', 'label', 'language', 'metro', 'currency', 'salary_from', 'salary_to', 'schedule', 'order_by', 'citizenship', 'work_ticket', 'educational_institution', 'search_in_responses', 'by_text_prefix', 'driver_license_types', 'vacancy_id', 'page', 'per_page', 'professional_role', 'folder', 'include_all_folders', 'job_search_status', 'resume', 'filter_exp_industry', 'filter_exp_period', 'with_job_search_status', 'education_levels', 'district', 'saved_search_id', 'search_by_vacancy_id', 'last_used_timestamp', 'last_used', 'business_trip_readiness', 'host', 'locale'];

    protected const HEADER_FIELDS = ['HH_User_Agent'];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var string|null Поисковая фраза. Метод найдет резюме, в которых встречаются все слова заданной фразы.

Особенности:

* Можно указать несколько значений. Каждое дополнительное значение уточняет поиск.
* В качестве поисковой фразы можно использовать [язык поисковых запросов](https://hh.ru/article/1175).
* Специально для этого поля предусмотрено [автодополнение по подсказкам](#tag/Podskazki-po-klyuchevym-slovam/operation/get-resume-search-keywords-suggests).
* Для тонкой настройки по фразе можно использовать параметры `text.logic`, `text.field`, `text.period`. При использовании дополнительных `text.*` полей, необходимо указывать весь набор (триаду) параметров ([пример использования](#tag/Poisk-rezyume/Primery-poiskovyh-zaprosov))
 */
    public ?string $text = null;

    /** @var string|null Описывает, как производится поиск. Возможные значения перечислены в поле `resume_search_logic` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $text_logic = null;

    /** @var string|null Описывает, где должны встречаться слова из поисковой фразы `text`. Можно указать несколько значений через запятую, например `?text.field=education,keywords`. Возможные значения перечислены в поле `resume_search_fields` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?string $text_field = null;

    /** @var string|null Период опыта работы.

Параметр имеет смысл только при `text.field` равным одному из значений: `experience`, `experience_company`, `experience_position`, `experience_description`, но указывать его необходимо всегда при указании других `text.*`. Если параметр не имеет смысла, то его значение можно оставить пустым
 */
    public ?string $text_period = null;

    /** @var string|null Размер компании, в которой у соискателя имеется опыт работы.
Параметр применяется только в случае, если text.field имеет одно из следующих значений: workplaces, workplace_organization, workplace_position, workplace_description.
Возможные значения:
* `any` - любой размер компании
* `small` - компании численностью до 100 человек
* `medium` - компании численностью 100-1000 человек
* `large` - компании численностью более 1000 человек

Количество значений этого параметра должно соответствовать количеству значений в `text`, `text.field` и `text.logic`
 */
    public ?string $text_company_size = null;

    /** @var string|null Идентификатор отрасли, в которой соискатель должен иметь опыт работы.
Возможные значения перечислены в [справочнике отраслей](#tag/Obshie-spravochniki/operation/get-industries) (поле id).

Количество значений этого параметра должно соответствовать количеству значений в `text`, `text.field` и `text.logic`
 */
    public ?string $text_industry = null;

    /** @var string|null Нижняя граница возраста соискателя в годах.

По умолчанию в выдачу добавляются также резюме с неуказанным возрастом. Для выдачи резюме только с указанным возрастом передайте значение `only_with_age` в параметре `label`
 */
    public ?string $age_from = null;

    /** @var string|null Верхняя граница возраста соискателя в годах.

По умолчанию в выдачу добавляются также резюме с неуказанным возрастом. Для выдачи резюме только с указанным возрастом передайте значение `only_with_age` в параметре `label`
 */
    public ?string $age_to = null;

    /** @var string|null Регион. Возможные значения указаны в [справочнике регионов](#tag/Obshie-spravochniki/operation/get-areas). Можно указать несколько значений.

По умолчанию выбираются резюме, в которых соискатели живут в указанных регионах или готовы в них переехать. Поменять это поведение поиска можно, указав параметр `relocation`
 */
    public ?string $area = null;

    /** @var string|null Готовность к переезду. Возможные значения указаны в поле `resume_search_relocation` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Необходимо указывать вместе с параметром `area`
 */
    public ?string $relocation = null;

    /** @var float|null Поиск ведется по резюме, опубликованным за указанный период в днях. Если период не указан, поиск ведется без ограничений по дате публикации
 */
    public ?float $period = null;

    /** @var string|null Дата, от которой нужно начать поиск. Значение указывается в формате [ISO 8601](#date-format) — `YYYY-MM-DD` или с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`. Нельзя передавать вместе с параметром `period`
 */
    public ?string $date_from = null;

    /** @var string|null Дата, до которой нужно искать. Значение указывается в формате [ISO 8601](#date-format) — `YYYY-MM-DD` или с точность до секунды `YYYY-MM-DDThh:mm:ss±hhmm`. Можно передавать только в паре с параметром `date_from`. Нельзя передавать вместе с параметром `period`
 */
    public ?string $date_to = null;

    /** @var string|null Уровень образования. Возможные значения перечислены в поле `education_level` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Если параметр не указан, поиск ведется без ограничений на уровень образования.

Заменен на параметр `education_levels`. В настоящее время поддерживается для обратной совместимости
 */
    public ?string $education_level = null;

    /** @var string|null Тип занятости. Возможные значения перечислены в поле `employment` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $employment = null;

    /** @var string|null Опыт работы. Возможные значения перечислены в поле `experience` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $experience = null;

    /** @var string|null Ключевые навыки. Указывается один или несколько идентификаторов ключевых навыков. Значения можно получить из поля `id` в [подсказке по ключевым навыкам](#tag/Podskazki/operation/get-skill-set-suggests)
 */
    public ?string $skill = null;

    /** @var string|null Пол соискателя. Возможные значения перечислены в поле `gender` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries).

По умолчанию вне зависимости от значения параметра будут найдены резюме, в которых пол не указан, исключить из поисковой выдачи такие резюме можно с помощью параметра `label=only_with_gender`
 */
    public ?string $gender = null;

    /** @var string|null Дополнительный фильтр. Возможные значения перечислены в поле `resume_search_label` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $label = null;

    /** @var string|null Знание языка. Можно указать несколько значений. Задается в формате `language.level`, где:

* `language` — значение из [справочника языков](#tag/Obshie-spravochniki/operation/get-languages);
* `level` — значение поля language_level из [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries)

Например, `ita.c2`
 */
    public ?string $language = null;

    /** @var string|null Линия, либо станция метро. Можно указать несколько значений.

Возможные значения перечислены в [справочнике метро](#tag/Obshie-spravochniki/operation/get-metro-stations)
 */
    public ?string $metro = null;

    /** @var string|null Код валюты. Возможные значения перечислены в поле `currency.code` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public ?string $currency = null;

    /** @var float|null Нижняя граница желаемой заработной платы (ЗП).

По умолчанию в выдачу добавляются также резюме с неуказанной ЗП. Для выдачи резюме только с указанной ЗП передайте параметр `label=only_with_salary`
 */
    public ?float $salary_from = null;

    /** @var float|null Верхняя граница желаемой заработной платы (ЗП).

По умолчанию в выдачу добавляются также резюме с неуказанной ЗП. Для выдачи резюме только с указанной ЗП передайте параметр `label=only_with_salary`
 */
    public ?float $salary_to = null;

    /** @var string|null График работы. Возможные значения перечислены в поле `schedule` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $schedule = null;

    /** @var string|null Сортировка списка резюме. Возможные значения перечислены в поле `resume_search_order` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 */
    public ?string $order_by = null;

    /** @var string|null Страна гражданства соискателя. Возможные значения перечислены в [справочнике стран](#tag/Obshie-spravochniki/operation/get-countries). Можно указать несколько значений
 */
    public ?string $citizenship = null;

    /** @var string|null Страна, в которой у соискателя есть разрешение на работу. Возможные значения перечислены в [справочнике стран](#tag/Obshie-spravochniki/operation/get-countries). Можно указать несколько значений
 */
    public ?string $work_ticket = null;

    /** @var string|null Учебные заведения соискателя. В качестве параметров используются [подсказки по названиям университетов](#tag/Podskazki/operation/get-educational-institutions-suggests). Можно указать несколько значений
 */
    public ?string $educational_institution = null;

    /** @var bool|null Если `true`, то поиск осуществляется только по резюме, которыми соискатели откликались на вакансии компании текущего пользователя, если `false` — поиск осуществляется по всем резюме. По умолчанию — `false`
 */
    public ?bool $search_in_responses = null;

    /** @var bool|null Если `true`, включается поиск по префиксу. Для каждого параметра `text` будут находиться не только полные совпадения слов, но еще и слова, начинающиеся с `text`. По умолчанию — `false`
 */
    public ?bool $by_text_prefix = null;

    /** @var string|null Категории водительских прав соискателя. Возможные значения перечислены в поле `driver_license_types` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $driver_license_types = null;

    /** @var string|null Идентификатор вакансии для поиска похожих резюме. Необходимо передавать идентификатор активной вакансии работодателя или вакансии работодателя в архиве
 */
    public ?string $vacancy_id = null;

    /** @var float|null Номер страницы (считается от 0, по умолчанию — 0) */
    public ?float $page = null;

    /** @var float|null Количество элементов (по умолчанию — 20, максимальное значение — 100) */
    public ?float $per_page = null;

    /** @var string|null Профессиональная роль. Элемент справочника [профессиональных ролей](#tag/Obshie-spravochniki/operation/get-professional-roles-dictionary). Можно указать несколько значений
 */
    public ?string $professional_role = null;

    /** @var string|null Один или несколько идентификаторов папок с отобранными резюме. Если данный параметр передан, поиск будет ограничен содержимым указанных папок. Можно передавать идентификаторы нескольких папок, например: `folder=111&folder=222&folder=333`
 */
    public ?string $folder = null;

    /** @var bool|null Признак, указывающий, нужно ли вести поиск по всем папкам с отобранными резюме.

Если у менеджера есть доступ к избранным папкам, то поиск проходит по умолчанию в избранных папках. Если передать параметр `false`, то поиск не будет ограничен папками. Если в одном запросе будут переданы параметры `folder` и `include_all_folders`, вернется ошибка `400 Bad Request`
 */
    public ?bool $include_all_folders = null;

    /** @var string|null Статус поиска работы.

Возможные значения перечислены в поле `job_search_statuses_employer` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $job_search_status = null;

    /** @var string|null Идентификатор резюме для поиска похожих резюме
 */
    public ?string $resume = null;

    /** @var string|null Обрабатывается совместно с параметром `filter_exp_period`. Идентификатор отрасли, в которой у соискателя должен присутствовать опыт работы.
Возможные значения перечислены в [справочнике отраслей](#tag/Obshie-spravochniki/operation/get-industries) (поле id). Можно указать несколько значений
 */
    public ?string $filter_exp_industry = null;

    /** @var string|null Период, за который у соискателя должен присутствовать опыт работы в отрасли, указанной в параметре `filter_exp_industry`.

Возможные значения:

* `all_time` - за все время
* `last_year` - за последний год
* `last_three_years` - за последние 3 года
* `last_six_years` - за последние 6 лет.

По умолчанию равен `all_time`
 */
    public ?string $filter_exp_period = null;

    /** @var bool|null Параметр для просмотра в резюме статуса поиска кандидата
 */
    public ?bool $with_job_search_status = null;

    /** @var string|null Требуемый уровень образования соискателя.
Возможные значения перечислены в поле `education_level` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries).

Если параметр не указан, поиск ведется без ограничений на уровень образования
 */
    public ?string $education_levels = null;

    /** @var string|null Идентификатор района. Возможные значения приведены в справочнике [/districts](#tag/Obshie-spravochniki/operation/get-all-districts)
 */
    public ?string $district = null;

    /** @var string|null Идентификатор сохраненного автопоиска.
Возвращается в полях `items.url` и `new_items.url` при [получении данных о конкретном автопоиске](https://api.hh.ru/openapi/redoc#tag/Sohranennye-poiski-rezyume/operation/get-saved-resume-search) и полях `items.items.url` и `items.new_items.url` при [получении списка автопоисков](https://api.hh.ru/openapi/redoc#tag/Sohranennye-poiski-rezyume/operation/get-saved-resume-searches).
Использование этого параметра при поиске резюме обновляет значение `last_used` в указанном автопоиске
 */
    public ?string $saved_search_id = null;

    /** @var string|null Идентификатор вакансии, среди откликов на которую необходимо искать резюме
 */
    public ?string $search_by_vacancy_id = null;

    /** @var string|null Время последнего просмотра результатов автопоиска в формате временной метки.
Используется совместно с параметром `saved_search_id` для поиска и подсчета новых резюме, подходящих под запрос и появившихся с момента последнего просмотра.
Количество новых резюме возвращается в поле `new_items.count` при [получении данных о конкретном автопоиске](https://api.hh.ru/openapi/redoc#tag/Sohranennye-poiski-rezyume/operation/get-saved-resume-search) и поле `items.new_items.count` при [получении списка автопоисков](https://api.hh.ru/openapi/redoc#tag/Sohranennye-poiski-rezyume/operation/get-saved-resume-searches)
 */
    public ?string $last_used_timestamp = null;

    /** @var string|null Время последнего просмотра результатов автопоиска в формате даты и времени с временной зоной.
Пример: 2015-11-12T18:06:04+0300.
Используется совместно с параметром `saved_search_id` для поиска и подсчета новых резюме, подходящих под запрос и появившихся с момента последнего просмотра.
Количество новых резюме возвращается в поле `new_items.count` при [получении данных о конкретном автопоиске](https://api.hh.ru/openapi/redoc#tag/Sohranennye-poiski-rezyume/operation/get-saved-resume-search) и поле `items.new_items.count` при [получении списка автопоисков](https://api.hh.ru/openapi/redoc#tag/Sohranennye-poiski-rezyume/operation/get-saved-resume-searches)
 */
    public ?string $last_used = null;

    /** @var string|null Готовность соискателя к переезду.
Возможные значения перечислены в поле business_trip_readiness [в справочнике полей](https://api.hh.ru/openapi/redoc#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 */
    public ?string $business_trip_readiness = null;

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
