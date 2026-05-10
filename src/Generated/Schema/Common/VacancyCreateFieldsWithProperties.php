<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyCreateFieldsWithProperties.
 */
class VacancyCreateFieldsWithProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area' => 'area', 'closed_for_applicants' => 'closed_for_applicants', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'manager' => 'manager', 'name' => 'name', 'previous_id' => 'previous_id', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['name', 'description', 'area', 'vacancy_properties', 'professional_roles'];

    protected const NULLABLE_FIELDS = ['manager', 'previous_id'];

    protected const CASTS = ['area' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyArea::class, 'closed_for_applicants' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'description' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyDescription::class, 'name' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyName::class, 'vacancy_properties' => \and_y87\ClientsHh\Generated\Schema\Common\VacancySetterVacancyProperties::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyArea Schema field area */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyArea $area;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants|null Schema field closed_for_applicants */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDescription Schema field description */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyDescription $description;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes|null Schema field driver_license_types */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyDriverLicenseTypes $driver_license_types = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyManagerPost|null Schema field manager */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\VacancyManagerPost $manager = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyName Schema field name */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyName $name;

    /** @var string|null Если этот параметр передан, то у новой вакансии дополнительно будет создана связь с предыдущей вакансией (поле previous_id). Этот параметр не влияет на другие и не связан с ними, их всё равно необходимо передавать.
Должен быть равен только ID архивной вакансии. ID архивной вакансии можно получить, запросив [список архивных вакансий](#tag/Upravlenie-vakansiyami/operation/get-archived-vacancies) <a name='previous_id'></a>
 */
    public ?string $previous_id = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancySetterVacancyProperties Свойства вакансии, такие как тариф, анонимность и другие */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancySetterVacancyProperties $vacancy_properties;
}
