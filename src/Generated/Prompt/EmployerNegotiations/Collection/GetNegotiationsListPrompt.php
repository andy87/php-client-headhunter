<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\EmployerNegotiations\Collection;

use and_y87\ClientsHh\Generated\Prompt\GetCollectionNegotiationsListPrompt as BaseGetCollectionNegotiationsListPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /negotiations/response.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-collection-negotiations-list
 *
 * @property string $vacancy_id Идентификатор вакансии
 * @property string|null $order_by Тип сортировки. Возможные значения указаны в поле `order_types` [списка коллекций](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations)
 * @property int|null $page Порядковый номер страницы в выдаче. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). По умолчанию нумерация начинается с 0 страницы
 * @property int|null $per_page Количество элементов на странице выдачи. Поддерживаются [стандартные параметры пагинации](#section/Obshaya-informaciya/Paginaciya). Максимальное значение — `50`
 * @property string|null $age_from Нижняя граница возраста соискателя в годах
 * @property string|null $age_to Верхняя граница возраста соискателя в годах
 * @property string|null $area Регион. Возможные значения указаны в [справочнике регионов](#tag/Obshie-spravochniki/operation/get-areas). Можно указать несколько значений. По умолчанию выбираются резюме, в которых соискатели живут в указанных регионах или готовы в них переехать. Поменять это поведение поиска можно, указав параметр `relocation`
 * @property string|null $citizenship Страна гражданства соискателя. Возможные значения перечислены в [справочнике стран](#tag/Obshie-spravochniki/operation/get-countries). Можно указать несколько значений
 * @property string|null $currency Код валюты. Возможные значения перечислены в поле `currency.code` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries)
 * @property string|null $driver_license_types Категории водительских прав соискателя. Возможные значения перечислены в поле `driver_license_types` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $educational_institution Учебные заведения соискателя. В качестве параметров используются [подсказки по названиям университетов](#tag/Podskazki/operation/get-educational-institutions-suggests). Можно указать несколько значений
 * @property string|null $education_level Уровень образования. Возможные значения перечислены в поле `education_level` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Если параметр не указан, поиск ведется без ограничений на уровень образования
 * @property string|null $experience Опыт работы. Возможные значения перечислены в поле `experience` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Можно указать несколько значений
 * @property string|null $gender Пол соискателя. Возможные значения перечислены в поле `gender` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). По умолчанию вне зависимости от значения параметра будут найдены резюме, в которых пол не указан, исключить из поисковой выдачи такие резюме можно с помощью параметра `label=only_with_gender`
 * @property string|null $language Знание языка. Можно указать несколько значений. Задается в формате `language.level`, где: * `language` — значение из [справочника языков](#tag/Obshie-spravochniki/operation/get-languages); * `level` — значение поля language_level из [справочника полей](#tag/Obshie-spravochniki/operation/get-dictionaries) Например, `ita.c2`
 * @property string|null $relocation Готовность к переезду. Возможные значения указаны в поле `resume_search_relocation` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries). Необходимо указывать вместе с параметром `area`
 * @property float|null $salary_from Нижняя граница желаемой заработной платы (ЗП)
 * @property float|null $salary_to Верхняя граница желаемой заработной платы (ЗП)
 * @property float|null $search_radius_meters Расстояние до кандидата (в метрах)
 * @property string|null $search_text Поисковая строка
 * @property bool|null $show_only_new_responses Показывать только непросмотренные отклики коллекции «Все неразобранные» (`/response`)
 * @property bool|null $show_only_with_vehicle Показывать соискателей с личным автомобилем
 * @property bool|null $show_only_new Показывать только отклики, в которых есть непрочитанные сообщения для всех коллекций, кроме «Все неразобранные» (`/response`)
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetNegotiationsListPrompt extends BaseGetCollectionNegotiationsListPrompt
{
}
