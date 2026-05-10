<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\SavedResumeSearches\Saved;

use Andy87\ClientsHh\Generated\Prompt\CreateSavedResumeSearchPrompt as BaseCreateSavedResumeSearchPrompt;

/**
 * Класс данных запроса HeadHunter API [POST] /saved_searches/resumes.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/create-saved-resume-search
 *
 * @property string|null $text Поисковая фраза. Метод найдет резюме, в которых встречаются все слова заданной фразы. Особенности: * Можно указать несколько значений. Каждое дополнительное значение уточняет поиск. * В качестве поисковой фразы можно использовать [язык поисковых запросов](https://hh.ru/article/1175). * Специально для этого поля предусмотрено [автодополнение по подсказкам](#tag/Podskazki-po-klyuchevym-slovam/operation/get-resume-search-keywords-suggests). * Для тонкой настройки по фразе можно использовать параметры `text.logic`, `text.field`, `text.period`. При использовании дополнительных `text.*` полей, необходимо указывать весь набор (триаду) параметров
 * @property string|null $text_logic Описывает, как производится поиск. Возможные значения перечислены в поле `resume_search_logic` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 * @property string|null $text_field Описывает, где должны встречаться слова из поисковой фразы `text`. Можно указать несколько значений через запятую, например `?text.field=education,keywords`. Возможные значения перечислены в поле `resume_search_fields` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 * @property string|null $text_period Период опыта работы. Параметр имеет смысл только при `text.field` равным одному из значений: `experience`, `experience_company`, `experience_position`, `experience_description`, но указывать его необходимо всегда при указании других `text.*`. Если параметр не имеет смысла, то его значение можно оставить пустым
 * @property float|null $age_from Нижняя граница возраста соискателя в годах. По умолчанию в выдачу добавляются также резюме с неуказанным возрастом. Для выдачи резюме только с указанным возрастом передайте значение `only_with_age` в параметре `label`
 * @property float|null $age_to Верхняя граница возраста соискателя в годах. По умолчанию в выдачу добавляются также резюме с неуказанным возрастом. Для выдачи резюме только с указанным возрастом передайте значение `only_with_age` в параметре `label`
 * @property string|null $area Регион. Возможные значения указаны в [справочнике регионов](#tag/Obshie-spravochniki/operation/get-areas). Можно указать несколько значений. По умолчанию выбираются резюме, в которых соискатели живут в указанных регионах или готовы в них переехать. Поменять это поведение поиска можно, указав параметр `relocation`
 * @property string|null $relocation Готовность к переезду. Возможные значения указаны в поле `resume_search_relocation` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Необходимо указывать вместе с параметром `area`
 * @property float|null $period Поиск ведется по резюме, опубликованным за указанный период в днях. Если период не указан, поиск ведется без ограничений по дате публикации
 * @property string|null $date_from Дата, от которой нужно начать поиск. Значение указывается в формате [ISO 8601](#date-format) — `YYYY-MM-DD` или с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`. Нельзя передавать вместе с параметром `period`
 * @property string|null $date_to Дата, до которой нужно искать. Значение указывается в формате [ISO 8601](#date-format) — `YYYY-MM-DD` или с точность до секунды `YYYY-MM-DDThh:mm:ss±hhmm`. Можно передавать только в паре с параметром `date_from`. Нельзя передавать вместе с параметром `period`
 * @property string|null $education_level Уровень образования. Возможные значения перечислены в поле `education_level` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Если параметр не указан, поиск ведется без ограничений на уровень образования
 * @property string|null $employment Тип занятости. Возможные значения перечислены в поле `employment` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $experience Опыт работы. Возможные значения перечислены в поле `experience` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $skill Ключевые навыки. Указывается один или несколько идентификаторов ключевых навыков. Значения можно получить из поля `id` в [подсказке по ключевым навыкам](#tag/Podskazki/operation/get-skill-set-suggests)
 * @property string|null $gender Пол соискателя. Возможные значения перечислены в поле `gender` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). По умолчанию вне зависимости от значения параметра будут найдены резюме, в которых пол не указан, убрать такие резюме можно с помощью параметра `label=only_with_gender`
 * @property string|null $label Дополнительный фильтр. Возможные значения перечислены в поле `resume_search_label` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $language Знание языка. Можно указать несколько значений. Задается в формате `language.level`, где: * `language` — значение из [справочника языков](#tag/Obshie-spravochniki/operation/get-languages); * `level` — значение поля language_level из [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) Например, `ita.c2`
 * @property string|null $metro Линия, либо станция метро. Возможные значения перечислены в [справочнике метро](#tag/Obshie-spravochniki/operation/get-metro-stations)
 * @property string|null $currency Код валюты. Возможные значения перечислены в поле `currency.code` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 * @property float|null $salary_from Нижняя граница желаемой заработной платы (ЗП). По умолчанию в выдачу добавляются также резюме с неуказанной ЗП. Для выдачи резюме только с указанной ЗП передайте параметр `label=only_with_salary`
 * @property float|null $salary_to Верхняя граница желаемой заработной платы (ЗП). По умолчанию в выдачу добавляются также резюме с неуказанной ЗП. Для выдачи резюме только с указанной ЗП передайте параметр `label=only_with_salary`
 * @property string|null $schedule График работы. Возможные значения перечислены в поле `schedule` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $order_by Сортировка списка резюме. Возможные значения перечислены в поле `resume_search_order` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 * @property string|null $citizenship Страна гражданства соискателя. Возможные значения перечислены в [справочнике стран](#tag/Obshie-spravochniki/operation/get-countries). Можно указать несколько значений
 * @property string|null $work_ticket Страна, в которой у соискателя есть разрешение на работу. Возможные значения перечислены в [справочнике стран](#tag/Obshie-spravochniki/operation/get-countries). Можно указать несколько значений
 * @property string|null $educational_institution Учебные заведения соискателя. В качестве параметров используются [подсказки по названиям университетов](#tag/Podskazki). Можно указать несколько значений
 * @property bool|null $search_in_responses Если `true`, то поиск осуществляется только по резюме, которыми соискатели откликались на вакансии компании текущего пользователя, если `false` — поиск осуществляется по всем резюме. По умолчанию — `false`
 * @property bool|null $by_text_prefix Если `true`, включается поиск по префиксу. Для каждого параметра `text` будут находиться не только полные совпадения слов, но еще и слова, начинающиеся с `text`. По умолчанию — `false`
 * @property string|null $driver_license_types Категории водительских прав соискателя. Возможные значения перечислены в поле `driver_license_types` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $vacancy_id Идентификатор вакансии для поиска похожих резюме. Необходимо передавать идентификатор активной вакансии работодателя или вакансии работодателя в архиве
 * @property float|null $page Номер страницы (считается от 0, по умолчанию — 0)
 * @property float|null $per_page Количество элементов (по умолчанию — 10, максимальное значение — 50)
 * @property string|null $professional_role Профессиональная роль. Элемент справочника [профессиональных ролей](#tag/Obshie-spravochniki/operation/get-professional-roles-dictionary). Можно указать несколько значений
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class CreateResumeSearchPrompt extends BaseCreateSavedResumeSearchPrompt
{
}
