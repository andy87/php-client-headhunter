<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyEmployer.
 */
class VacanciesVacancyEmployer extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accredited_it_employer' => 'accredited_it_employer', 'alternate_url' => 'alternate_url', 'country_id' => 'country_id', 'employer_rating' => 'employer_rating', 'id' => 'id', 'is_identified_by_esia' => 'is_identified_by_esia', 'logo_urls' => 'logo_urls', 'name' => 'name', 'trusted' => 'trusted', 'url' => 'url', 'vacancies_url' => 'vacancies_url', 'blacklisted' => 'blacklisted', 'applicant_services' => 'applicant_services'];

    protected const REQUIRED_FIELDS = ['name', 'trusted'];

    protected const NULLABLE_FIELDS = ['alternate_url', 'id', 'logo_urls', 'url', 'vacancies_url'];

    protected const CASTS = ['employer_rating' => \and_y87\ClientsHh\Generated\Schema\Common\VacanciesEmployerRating::class, 'applicant_services' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices::class];

    /** @var bool|null Флаг, показывающий, прошла ли компания IT аккредитацию */
    public ?bool $accredited_it_employer = null;

    /** @var string|null Ссылка на представление компании на сайте */
    public ?string $alternate_url = null;

    /** @var int|null Информация о стране компании */
    public ?int $country_id = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacanciesEmployerRating|null Schema field employer_rating */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacanciesEmployerRating $employer_rating = null;

    /** @var string|null Идентификатор компании */
    public ?string $id = null;

    /** @var bool|null Признак идентификации работодателя через ЕСИА */
    public ?bool $is_identified_by_esia = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls|null Ссылки на логотипы работодателя разных размеров */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesLogoUrls $logo_urls = null;

    /** @var string Название компании */
    public string $name;

    /** @var bool Флаг, показывающий, прошла ли компания проверку на сайте */
    public bool $trusted;

    /** @var string|null URL, на который нужно сделать GET-запрос, чтобы получить информацию о компании */
    public ?string $url = null;

    /** @var string|null Ссылка на поисковую выдачу вакансий данной компании */
    public ?string $vacancies_url = null;

    /** @var bool|null Добавлены ли все вакансии работодателя в список скрытых */
    public ?bool $blacklisted = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices|null Schema field applicant_services */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesEmployerApplicantServices $applicant_services = null;
}
