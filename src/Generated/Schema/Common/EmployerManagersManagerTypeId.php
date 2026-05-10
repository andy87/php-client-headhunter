<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersManagerTypeId.
 */
class EmployerManagersManagerTypeId extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор [типа менеджера](#tag/Menedzhery-rabotodatelya/operation/get-employer-manager-types). Поддерживается только тип менеджера `manager` */
    public string $id;
}
