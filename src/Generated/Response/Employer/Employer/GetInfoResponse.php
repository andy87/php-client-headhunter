<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\Employer\Employer;

use and_y87\ClientsHh\Generated\Response\GetEmployerInfoResponse as BaseGetEmployerInfoResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-info
 *
 * @property bool|null $accredited_it_employer Флаг, показывающий, прошел ли работодатель [IT аккредитацию](https://feedback.hh.ru/knowledge-base/article/00038)
 * @property string $alternate_url Ссылка на описание работодателя на сайте
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices|null $applicant_services Response field applicant_services
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesArea $area Информация о регионе работодателя
 * @property string|null $branded_description Строка с кодом HTML (возможно наличие `<script/>` и `<style/>`), которая является альтернативой стандартному описанию работодателя. HTML адаптирован для мобильных устройств и корректно отображается без поддержки Javascript. При этом: - Контент тянется по ширине на 100% ширины контейнера и умещается без прокрутки в 300px. - Контент рассчитан на то, что он будет вставлен в обвязку, в которую входит название, логотип, сайт и ссылка на вакансии работодателя. - Изображения, которые могут встретиться в таком описании, адаптированы под retina-дисплеи. - Размер шрифта не меньше 12px, размер межстрочного интервала не меньше 16px. Значение может быть `null`, если у работодателя отсутствует индивидуальное описание
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null $branding Значение может быть `null`, если у работодателя отсутствует брендирование страницы
 * @property string|null $country_code Информация о стране работодателя
 * @property string|null $description Описание работодателя в виде строки с кодом HTML (без `<script/>` и `<style/>`)
 * @property string $id Идентификатор работодателя
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName> $industries Список отраслей работодателя. Элементы [справочника индустрий](https://api.hh.ru/openapi/redoc#tag/Obshie-spravochniki/operation/get-industries)
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployersInsiderInterviews> $insider_interviews Список интервью
 * @property bool|null $is_identified_by_esia Признак идентификации работодателя через ЕСИА
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls|null $logo_urls Ссылки на изображения логотипов работодателя разных размеров. `original` — это необработанный логотип, который может быть большого размера. Если изначально загруженный компанией логотип меньше, чем 240px и/или 90px по меньшей стороне, то в соответствующих ключах будут ссылки на изображения оригинального размера. Объект может быть `null`, если компания не загрузила логотип. Клиент должен предусмотреть возможность отсутствия логотипа по указанной ссылке (ответ с кодом `404 Not Found`). Если информация о работодателе используется для описания вакансии, у которой есть брендированный логотип, все ссылки ведут на него. Логотипы 90 и 240 присутствуют не во всех компаниях
 * @property string $name Название работодателя
 * @property float|null $open_vacancies Количество открытых вакансий у работодателя
 * @property array<int, string> $relations Если работодатель добавлен в черный список, то вернется `['blacklisted']`, иначе `[]`
 * @property string $site_url Адрес сайта работодателя
 * @property bool $trusted Флаг, показывающий, прошел ли работодатель [проверку на сайте](https://feedback.hh.ru/knowledge-base/article/5951)
 * @property string|null $type Тип работодателя (прямой работодатель, кадровое агентство и т.п.). Возможные значения описаны в [справочнике](#tag/Obshie-spravochniki/operation/get-dictionaries) в поле `employer_type`. Возвращает `null`, если тип работодателя скрыт
 * @property string $vacancies_url URL для получения поисковой выдачи с вакансиями данного работодателя
 */
class GetInfoResponse extends BaseGetEmployerInfoResponse
{
}
