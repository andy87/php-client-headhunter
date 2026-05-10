<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerServicesMethodAccessItem.
 */
class EmployerServicesMethodAccessItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['access' => 'access', 'description' => 'description', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'description', 'access'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Информация о доступе к платному методу */
    public array $access;

    /** @var string Описание группы методов */
    public string $description;

    /** @var string Идентификатор группы методов */
    public string $id;
}
