<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersEmployerManagerItem.
 */
class EmployerManagersEmployerManagerItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['additional_phone' => 'additional_phone', 'area' => 'area', 'email' => 'email', 'first_name' => 'first_name', 'full_name' => 'full_name', 'id' => 'id', 'is_main_contact_person' => 'is_main_contact_person', 'last_name' => 'last_name', 'middle_name' => 'middle_name', 'name' => 'name', 'phone' => 'phone', 'position' => 'position', 'special_note_1' => 'special_note_1', 'special_note_2' => 'special_note_2', 'vacancies_count' => 'vacancies_count'];

    protected const REQUIRED_FIELDS = ['id', 'email', 'position', 'area'];

    protected const NULLABLE_FIELDS = ['additional_phone', 'middle_name', 'special_note_1', 'special_note_2', 'vacancies_count'];

    protected const CASTS = ['additional_phone' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class, 'area' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersArea::class, 'phone' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Дополнительный телефон менеджера */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $additional_phone = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersArea Schema field area */
    public \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersArea $area;

    /** @var string Адрес электронной почты менеджера */
    public string $email;

    /** @var string|null Имя менеджера */
    public ?string $first_name = null;

    /** @var string|null Полное имя менеджера */
    public ?string $full_name = null;

    /** @var string Идентификатор менеджера */
    public string $id;

    /** @var bool|null Является ли менеджер основным контактным лицом */
    public ?bool $is_main_contact_person = null;

    /** @var string|null Фамилия менеджера */
    public ?string $last_name = null;

    /** @var string|null Отчество менеджера */
    public ?string $middle_name = null;

    /** @var string|null Полное имя менеджера */
    public ?string $name = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Основной телефон менеджера */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $phone = null;

    /** @var string Должность менеджера */
    public string $position;

    /** @var string|null Первый спецпризнак менеджера */
    public ?string $special_note_1 = null;

    /** @var string|null Второй спецпризнак менеджера */
    public ?string $special_note_2 = null;

    /** @var float|null Количество опубликованных (активных) вакансий у данного менеджера. `null` — если у пользователя нет прав на просмотр вакансий этого менеджера */
    public ?float $vacancies_count = null;
}
