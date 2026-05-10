<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesEmployerPublic.
 */
class VacanciesEmployerPublic extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accredited_it_employer' => 'accredited_it_employer', 'alternate_url' => 'alternate_url', 'country_id' => 'country_id', 'employer_rating' => 'employer_rating', 'id' => 'id', 'is_identified_by_esia' => 'is_identified_by_esia', 'logo_urls' => 'logo_urls', 'name' => 'name', 'trusted' => 'trusted', 'url' => 'url', 'vacancies_url' => 'vacancies_url'];

    protected const REQUIRED_FIELDS = ['name', 'trusted'];

    protected const NULLABLE_FIELDS = ['alternate_url', 'id', 'logo_urls', 'url', 'vacancies_url'];

    protected const CASTS = ['employer_rating' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesEmployerRating::class];

    /** @var bool|null Флаг, показывающий, прошла ли компания IT аккредитацию */
    public ?bool $accredited_it_employer = null;

    /** @var string|null Ссылка на представление компании на сайте */
    public ?string $alternate_url = null;

    /** @var int|null Информация о стране компании */
    public ?int $country_id = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesEmployerRating|null Schema field employer_rating */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesEmployerRating $employer_rating = null;

    /** @var string|null Идентификатор компании */
    public ?string $id = null;

    /** @var bool|null Признак идентификации работодателя через ЕСИА */
    public ?bool $is_identified_by_esia = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls|null Ссылки на логотипы работодателя разных размеров */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls $logo_urls = null;

    /** @var string Название компании */
    public string $name;

    /** @var bool Флаг, показывающий, прошла ли компания проверку на сайте */
    public bool $trusted;

    /** @var string|null URL, на который нужно сделать GET-запрос, чтобы получить информацию о компании */
    public ?string $url = null;

    /** @var string|null Ссылка на поисковую выдачу вакансий данной компании */
    public ?string $vacancies_url = null;
}
