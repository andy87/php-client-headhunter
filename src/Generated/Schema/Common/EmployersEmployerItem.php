<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersEmployerItem.
 */
class EmployersEmployerItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['alternate_url' => 'alternate_url', 'id' => 'id', 'logo_urls' => 'logo_urls', 'name' => 'name', 'url' => 'url', 'vacancies_url' => 'vacancies_url', 'is_identified_by_esia' => 'is_identified_by_esia', 'open_vacancies' => 'open_vacancies'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'url', 'alternate_url', 'vacancies_url', 'open_vacancies'];

    protected const NULLABLE_FIELDS = ['logo_urls'];

    protected const CASTS = [];

    /** @var string Ссылка на описание работодателя на сайте */
    public string $alternate_url;

    /** @var string Идентификатор работодателя */
    public string $id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls|null Ссылки на изображения логотипов работодателя разных размеров. `original` — это необработанный логотип, который может быть большого размера. Если изначально загруженный компанией логотип меньше, чем 240px и/или 90px по меньшей стороне, то в соответствующих ключах будут ссылки на изображения оригинального размера. Объект может быть `null`, если компания не загрузила логотип. Клиент должен предусмотреть возможность отсутствия логотипа по указанной ссылке (ответ с кодом `404 Not Found`). Логотипы 90 и 240 присутствуют не во всех компаниях */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls $logo_urls = null;

    /** @var string Название работодателя */
    public string $name;

    /** @var string URL для получения полного описания работодателя */
    public string $url;

    /** @var string URL для получения поисковой выдачи с вакансиями данного работодателя */
    public string $vacancies_url;

    /** @var bool|null Признак идентификации работодателя через ЕСИА */
    public ?bool $is_identified_by_esia = null;

    /** @var float Количество открытых вакансий у работодателя */
    public float $open_vacancies;
}
