<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersEmployerManagerInfo.
 */
class EmployerManagersEmployerManagerInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['additional_phone' => 'additional_phone', 'area' => 'area', 'creation_time' => 'creation_time', 'email' => 'email', 'first_name' => 'first_name', 'full_name' => 'full_name', 'id' => 'id', 'is_main_contact_person' => 'is_main_contact_person', 'last_name' => 'last_name', 'manager_type' => 'manager_type', 'middle_name' => 'middle_name', 'name' => 'name', 'permissions' => 'permissions', 'phone' => 'phone', 'position' => 'position', 'special_note_1' => 'special_note_1', 'special_note_2' => 'special_note_2', 'vacancies_count' => 'vacancies_count'];

    protected const REQUIRED_FIELDS = ['id', 'email', 'position', 'first_name', 'last_name', 'is_main_contact_person', 'phone', 'permissions'];

    protected const NULLABLE_FIELDS = ['creation_time', 'special_note_1', 'special_note_2', 'vacancies_count'];

    protected const CASTS = ['additional_phone' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class, 'area' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersArea::class, 'manager_type' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerType::class, 'permissions' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions::class], 'phone' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Дополнительный телефон менеджера */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $additional_phone = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersArea|null Schema field area */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersArea $area = null;

    /** @var string|null Дата и время регистрации менеджера */
    public ?string $creation_time = null;

    /** @var string Адрес электронной почты менеджера */
    public string $email;

    /** @var string Имя менеджера */
    public string $first_name;

    /** @var string|null Полное имя менеджера */
    public ?string $full_name = null;

    /** @var string Идентификатор менеджера */
    public string $id;

    /** @var bool Является ли менеджер основным контактным лицом */
    public bool $is_main_contact_person;

    /** @var string Фамилия менеджера */
    public string $last_name;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerType|null Schema field manager_type */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersManagerType $manager_type = null;

    /** @var string|null Отчество менеджера */
    public ?string $middle_name = null;

    /** @var string|null Полное имя менеджера */
    public ?string $name = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions> Список [прав менеджера](#tag/Menedzhery-rabotodatelya/operation/get-employer-manager-types) */
    public array $permissions;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone Основной телефон менеджера */
    public \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $phone;

    /** @var string Должность менеджера */
    public string $position;

    /** @var string|null Первый спецпризнак менеджера */
    public ?string $special_note_1 = null;

    /** @var string|null Второй спецпризнак менеджера */
    public ?string $special_note_2 = null;

    /** @var float|null Количество опубликованных (активных) вакансий у данного менеджера. `null` — если у пользователя нет прав на просмотр вакансий этого менеджера */
    public ?float $vacancies_count = null;
}
