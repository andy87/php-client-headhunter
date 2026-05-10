<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyCreateFieldsWithProperties.
 */
class VacancyCreateFieldsWithProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area' => 'area', 'closed_for_applicants' => 'closed_for_applicants', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'manager' => 'manager', 'name' => 'name', 'previous_id' => 'previous_id', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['name', 'description', 'area', 'vacancy_properties', 'professional_roles'];

    protected const NULLABLE_FIELDS = ['manager', 'previous_id'];

    protected const CASTS = ['area' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyArea::class, 'closed_for_applicants' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'description' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription::class, 'name' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyName::class, 'vacancy_properties' => \Andy87\ClientsHh\Generated\Schema\Common\VacancySetterVacancyProperties::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyArea Schema field area */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyArea $area;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null Schema field closed_for_applicants */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription Schema field description */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription $description;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes|null Schema field driver_license_types */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerPost|null Schema field manager */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerPost $manager = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyName Schema field name */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyName $name;

    /** @var string|null Если этот параметр передан, то у новой вакансии дополнительно будет создана связь с предыдущей вакансией (поле previous_id). Этот параметр не влияет на другие и не связан с ними, их всё равно необходимо передавать.
Должен быть равен только ID архивной вакансии. ID архивной вакансии можно получить, запросив [список архивных вакансий](#tag/Upravlenie-vakansiyami/operation/get-archived-vacancies) <a name='previous_id'></a>
 */
    public ?string $previous_id = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancySetterVacancyProperties Свойства вакансии, такие как тариф, анонимность и другие */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancySetterVacancyProperties $vacancy_properties;
}
