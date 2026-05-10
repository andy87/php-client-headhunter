<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyCreateFields.
 */
class VacancyCreateFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area' => 'area', 'billing_type' => 'billing_type', 'description' => 'description', 'driver_license_types' => 'driver_license_types', 'manager' => 'manager', 'name' => 'name', 'previous_id' => 'previous_id', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['name', 'description', 'area', 'type', 'billing_type', 'professional_roles'];

    protected const NULLABLE_FIELDS = ['manager', 'previous_id'];

    protected const CASTS = ['area' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyArea::class, 'billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingType::class, 'description' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDescription::class, 'name' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyName::class, 'type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedType::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyArea Schema field area */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyArea $area;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingType Заменён на параметр [vacancy_properties](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list), если передать vacancy_properties, то значение данного поля будет проигнорировано */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingType $billing_type;

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

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedType Значение open/close заменены на closed_for_applicants, а anonymous,direct - на vacancy_properties (HH_ANONYMOUS, HH_ADVERTISING) */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedType $type;
}
