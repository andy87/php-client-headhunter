<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagerTypesEmployerManagerTypesItem.
 */
class EmployerManagerTypesEmployerManagerTypesItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['available_permissions' => 'available_permissions', 'id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'available_permissions'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['available_permissions' => [\and_y87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\EmployerManagerTypesAvailablePermissions> Список прав, которые можно дать данному типу менеджера */
    public array $available_permissions;

    /** @var string Идентификатор типа менеджера */
    public string $id;

    /** @var string Название типа менеджера */
    public string $name;
}
