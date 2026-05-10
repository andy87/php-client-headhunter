<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersAddEmployerManager.
 */
class EmployerManagersAddEmployerManager extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['additional_phone' => 'additional_phone', 'area' => 'area', 'email' => 'email', 'first_name' => 'first_name', 'is_main_contact_person' => 'is_main_contact_person', 'last_name' => 'last_name', 'manager_type' => 'manager_type', 'middle_name' => 'middle_name', 'permissions' => 'permissions', 'phone' => 'phone', 'position' => 'position'];

    protected const REQUIRED_FIELDS = ['manager_type', 'email', 'position', 'first_name', 'last_name', 'is_main_contact_person', 'phone', 'area'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['additional_phone' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class, 'area' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersAreaId::class, 'manager_type' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerTypeId::class, 'permissions' => [\and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPermissions::class], 'phone' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Дополнительный телефон менеджера */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $additional_phone = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersAreaId Schema field area */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersAreaId $area;

    /** @var string Адрес электронной почты менеджера */
    public string $email;

    /** @var string Имя менеджера */
    public string $first_name;

    /** @var bool Является ли менеджер основным контактным лицом */
    public bool $is_main_contact_person;

    /** @var string Фамилия менеджера */
    public string $last_name;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerTypeId Schema field manager_type */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerTypeId $manager_type;

    /** @var string|null Отчество менеджера */
    public ?string $middle_name = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPermissions>|null Список [прав менеджера](#tag/Menedzhery-rabotodatelya/operation/get-employer-manager-types) */
    public ?array $permissions = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone Основной телефон менеджера */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $phone;

    /** @var string Должность менеджера */
    public string $position;
}
