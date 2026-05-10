<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\VacancySearch\Vacancies;

use and_y87\ClientsHh\Generated\Prompt\GetVacanciesPrompt as BaseGetVacanciesPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /vacancies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancies
 *
 * @property float|null $page Номер страницы
 * @property float|null $per_page Количество элементов
 * @property string|null $text Переданное значение ищется в полях вакансии, указанных в параметре `search_field`. Доступен [язык запросов](https://hh.ru/article/1175). Специально для этого поля есть [автодополнение](#tag/Podskazki-po-klyuchevym-slovam/operation/get-vacancy-search-keywords)
 * @property string|null $search_field Область поиска. Справочник с возможными значениями: `vacancy_search_fields` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). По умолчанию, используются все поля. Можно указать несколько значений
 * @property string|null $experience Опыт работы. Необходимо передавать `id` из справочника `experience` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $employment Тип занятости. Необходимо передавать `id` из справочника `employment` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений Заменен на параметры `employment_form` и `label`
 * @property string|null $schedule График работы. Необходимо передавать `id` из справочника `schedule` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений Заменен на параметры `work_schedule_by_days`, `work_format` и `employment_form`
 * @property string|null $area Регион. Необходимо передавать `id` из справочника [/areas](#tag/Obshie-spravochniki/operation/get-areas). Можно указать несколько значений
 * @property string|null $metro Ветка или станция метро. Необходимо передавать `id` из справочника [/metro](#tag/Obshie-spravochniki/operation/get-metro-stations). Можно указать несколько значений
 * @property string|null $professional_role Профессиональная область. Необходимо передавать `id` из справочника [/professional_roles](#tag/Obshie-spravochniki/operation/get-professional-roles-dictionary)
 * @property string|null $industry Индустрия компании, разместившей вакансию. Необходимо передавать `id` из справочника [/industries](#tag/Obshie-spravochniki/operation/get-industries). Можно указать несколько значений
 * @property string|null $employer_id Идентификатор [работодателя](#tag/Rabotodatel). Можно указать несколько значений
 * @property string|null $currency Код валюты. Справочник с возможными значениями: `currency` (ключ `code`) в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Имеет смысл указывать только совместно с параметром `salary`
 * @property float|null $salary Размер заработной платы. Если указано это поле, но не указано `currency`, то для `currency` используется значение RUR. При указании значения будут найдены вакансии, в которых вилка зарплаты близка к указанной в запросе. При этом значения пересчитываются по текущим курсам ЦБ РФ. Например, при указании `salary=100&currency=EUR` будут найдены вакансии, где вилка зарплаты указана в рублях и после пересчёта в Евро близка к 100 EUR. По умолчанию будут также найдены вакансии, в которых вилка зарплаты не указана, чтобы такие вакансии отфильтровать, используйте `only_with_salary=true`
 * @property string|null $salary_frequency Частота выплат. Необходимо передавать `id` из справочника `salary_range_frequency` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $salary_mode Гранулярность зарплаты. Необходимо передавать `id` из справочника `salary_range_mode` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать одно значение
 * @property string|null $label Фильтр по меткам вакансий. Необходимо передавать `id` из справочника `vacancy_label` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property bool|null $only_with_salary Показывать вакансии только с указанием зарплаты Заменен на параметр `label=with_salary`
 * @property float|null $period Количество дней, в пределах которых производится поиск по вакансиям
 * @property string|null $date_from Дата, которая ограничивает снизу диапазон дат публикации вакансий. Нельзя передавать вместе с параметром `period`. Значение указывается в формате ISO 8601 (`YYYY-MM-DD`) или с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`. Указанное значение будет округлено до ближайших пяти минут
 * @property string|null $date_to Дата, которая ограничивает сверху диапазон дат публикации вакансий. Нельзя передавать вместе с параметром `period`. Значение указывается в формате ISO 8601 (`YYYY-MM-DD`) или с точностью до секунды `YYYY-MM-DDThh:mm:ss±hhmm`. Указанное значение будет округлено до ближайших пяти минут
 * @property float|null $top_lat Верхняя граница широты. При поиске используется значение указанного в вакансии адреса. Принимаемое значение — градусы в виде десятичной дроби. Необходимо передавать одновременно все четыре параметра гео-координат, иначе вернется ошибка
 * @property float|null $bottom_lat Нижняя граница широты. При поиске используется значение указанного в вакансии адреса. Принимаемое значение — градусы в виде десятичной дроби. Необходимо передавать одновременно все четыре параметра гео-координат, иначе вернется ошибка
 * @property float|null $left_lng Левая граница долготы. При поиске используется значение указанного в вакансии адреса. Принимаемое значение — градусы в виде десятичной дроби. Необходимо передавать одновременно все четыре параметра гео-координат, иначе вернется ошибка
 * @property float|null $right_lng Правая граница долготы. При поиске используется значение указанного в вакансии адреса. Принимаемое значение — градусы в виде десятичной дроби. Необходимо передавать одновременно все четыре параметра гео-координат, иначе вернется ошибка
 * @property string|null $order_by Сортировка списка вакансий. Справочник с возможными значениями: `vacancy_search_order` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Если выбрана сортировка по удалённости от гео-точки `distance`, необходимо также задать её координаты: `sort_point_lat`, `sort_point_lng`
 * @property float|null $sort_point_lat Значение географической широты точки, по расстоянию от которой будут отсортированы вакансии. Необходимо указывать только, если `order_by` установлено в `distance`
 * @property float|null $sort_point_lng Значение географической долготы точки, по расстоянию от которой будут отсортированы вакансии. Необходимо указывать только, если `order_by` установлено в `distance`
 * @property bool|null $clusters Возвращать ли [кластеры для данного поиска](#tag/Poisk-vakansij/Klastery-v-poiske-vakansij)
 * @property bool|null $describe_arguments Возвращать ли описание использованных параметров поиска (массив `arguments`)
 * @property bool|null $no_magic Если значение `true` — автоматическое преобразование вакансий отключено. При включённом автоматическом преобразовании, будет предпринята попытка изменить текстовый запрос пользователя на набор параметров. Например, запрос `text=москва бухгалтер 100500` будет преобразован в `text=бухгалтер&only_with_salary=true&area=1&salary=100500`
 * @property bool|null $premium Если значение `true` — в сортировке вакансий будет учтены премиум-вакансии. Такая сортировка используется на сайте
 * @property bool|null $responses_count_enabled Если значение `true` — дополнительное поле `counters` с количеством откликов для вакансии включено
 * @property string|null $part_time Вакансии для подработки. Возможные значения: * Все элементы из `working_days` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). * Все элементы из `working_time_intervals` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). * Все элементы из `working_time_modes` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). * Элементы `part` или `project` из `employment` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). * Элемент `accept_temporary`, показывает вакансии только с временным трудоустройством. Можно указать несколько значений Заменен на параметры `working_hours`, `work_schedule_by_days`, `employment_form` и `label`
 * @property bool|null $accept_temporary Если значение `true` — то поиск происходит только по вакансиям временной работы
 * @property string|null $employment_form Тип занятости. Необходимо передавать `id` из справочника `vacancy_search_employment_form` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $work_schedule_by_days График работы. Необходимо передавать `id` из справочника `work_schedule_by_days` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $working_hours Рабочие часы в день. Необходимо передавать `id` из справочника `working_hours` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $work_format Формат работы. Необходимо передавать `id` из справочника `work_format` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $excluded_text Исключить слова. Из результата будут исключены вакансии, содержащие слова, переданные в этом параметре. Слова разделяются запятой
 * @property string|null $education Образование. Можно указать несколько значений. Возможные значения: * `not_required_or_not_specified` - не требуется или не указано * `special_secondary` - среднее специальное * `higher` - высшее
 * @property string|null $driver_license_types Категория водительских прав. Необходимо передавать `id` из справочника `driver_license_types` в [/dictionaries](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetPrompt extends BaseGetVacanciesPrompt
{
}
