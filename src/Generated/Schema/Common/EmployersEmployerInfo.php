<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersEmployerInfo.
 */
class EmployersEmployerInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accredited_it_employer' => 'accredited_it_employer', 'alternate_url' => 'alternate_url', 'applicant_services' => 'applicant_services', 'area' => 'area', 'branded_description' => 'branded_description', 'branding' => 'branding', 'country_code' => 'country_code', 'description' => 'description', 'id' => 'id', 'industries' => 'industries', 'insider_interviews' => 'insider_interviews', 'is_identified_by_esia' => 'is_identified_by_esia', 'logo_urls' => 'logo_urls', 'name' => 'name', 'open_vacancies' => 'open_vacancies', 'relations' => 'relations', 'site_url' => 'site_url', 'trusted' => 'trusted', 'type' => 'type', 'vacancies_url' => 'vacancies_url'];

    protected const REQUIRED_FIELDS = ['name', 'id', 'site_url', 'vacancies_url', 'trusted', 'alternate_url', 'insider_interviews', 'area', 'relations', 'industries'];

    protected const NULLABLE_FIELDS = ['branded_description', 'branding', 'description', 'logo_urls', 'open_vacancies', 'type'];

    protected const CASTS = ['applicant_services' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices::class, 'area' => \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea::class, 'industries' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName::class], 'insider_interviews' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployersInsiderInterviews::class]];

    /** @var bool|null Флаг, показывающий, прошел ли работодатель [IT аккредитацию](https://feedback.hh.ru/knowledge-base/article/00038) */
    public ?bool $accredited_it_employer = null;

    /** @var string Ссылка на описание работодателя на сайте */
    public string $alternate_url;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices|null Schema field applicant_services */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices $applicant_services = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea Информация о регионе работодателя */
    public \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea $area;

    /** @var string|null Строка с кодом HTML (возможно наличие `<script/>` и `<style/>`), которая является альтернативой стандартному описанию работодателя. HTML адаптирован для мобильных устройств и корректно отображается без поддержки Javascript.

При этом:

- Контент тянется по ширине на 100% ширины контейнера и умещается без прокрутки в 300px.
- Контент рассчитан на то, что он будет вставлен в обвязку, в которую входит название, логотип, сайт и ссылка на вакансии работодателя.
- Изображения, которые могут встретиться в таком описании, адаптированы под retina-дисплеи.
- Размер шрифта не меньше 12px, размер межстрочного интервала не меньше 16px.

Значение может быть `null`, если у работодателя отсутствует индивидуальное описание
 */
    public ?string $branded_description = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Значение может быть `null`, если у работодателя отсутствует брендирование страницы */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $branding = null;

    /** @var string|null Информация о стране работодателя */
    public ?string $country_code = null;

    /** @var string|null Описание работодателя в виде строки с кодом HTML (без `<script/>` и `<style/>`) */
    public ?string $description = null;

    /** @var string Идентификатор работодателя */
    public string $id;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName> Список отраслей работодателя. Элементы [справочника индустрий](https://api.hh.ru/openapi/redoc#tag/Obshie-spravochniki/operation/get-industries) */
    public array $industries;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployersInsiderInterviews> Список интервью */
    public array $insider_interviews;

    /** @var bool|null Признак идентификации работодателя через ЕСИА */
    public ?bool $is_identified_by_esia = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls|null Ссылки на изображения логотипов работодателя разных размеров. `original` — это необработанный логотип, который может быть большого размера. Если изначально загруженный компанией логотип меньше, чем 240px и/или 90px по меньшей стороне, то в соответствующих ключах будут ссылки на изображения оригинального размера. Объект может быть `null`, если компания не загрузила логотип. Клиент должен предусмотреть возможность отсутствия логотипа по указанной ссылке (ответ с кодом `404 Not Found`). Если информация о работодателе используется для описания вакансии, у которой есть брендированный логотип, все ссылки ведут на него. Логотипы 90 и 240 присутствуют не во всех компаниях */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls $logo_urls = null;

    /** @var string Название работодателя */
    public string $name;

    /** @var float|null Количество открытых вакансий у работодателя */
    public ?float $open_vacancies = null;

    /** @var array<int, string> Если работодатель добавлен в черный список, то вернется `['blacklisted']`, иначе `[]` */
    public array $relations;

    /** @var string Адрес сайта работодателя */
    public string $site_url;

    /** @var bool Флаг, показывающий, прошел ли работодатель [проверку на сайте](https://feedback.hh.ru/knowledge-base/article/5951) */
    public bool $trusted;

    /** @var string|null Тип работодателя (прямой работодатель, кадровое агентство и т.п.). Возможные значения описаны в [справочнике](#tag/Obshie-spravochniki/operation/get-dictionaries) в поле `employer_type`. Возвращает `null`, если тип работодателя скрыт */
    public ?string $type = null;

    /** @var string URL для получения поисковой выдачи с вакансиями данного работодателя */
    public string $vacancies_url;
}
