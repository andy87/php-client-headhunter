<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersManagerData.
 */
class EmployerManagersManagerData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['additional_phone' => 'additional_phone', 'permissions' => 'permissions', 'phone' => 'phone', 'position' => 'position'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['additional_phone' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class, 'permissions' => [\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions::class], 'phone' => \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Дополнительный телефон менеджера */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $additional_phone = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions>|null Список прав, которые можно дать данному типу менеджера */
    public ?array $permissions = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone|null Основной телефон менеджера */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployerManagersPhone $phone = null;

    /** @var string|null Schema field position */
    public ?string $position = null;
}
