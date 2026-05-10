<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersManagerData.
 */
class EmployerManagersManagerData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['additional_phone' => 'additional_phone', 'permissions' => 'permissions', 'phone' => 'phone', 'position' => 'position'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['additional_phone' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class, 'permissions' => [\and_y87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions::class], 'phone' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Дополнительный телефон менеджера */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $additional_phone = null;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions>|null Список прав, которые можно дать данному типу менеджера */
    public ?array $permissions = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Основной телефон менеджера */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $phone = null;

    /** @var string|null Schema field position */
    public ?string $position = null;
}
