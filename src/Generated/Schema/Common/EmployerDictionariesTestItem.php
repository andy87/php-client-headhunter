<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerDictionariesTestItem.
 */
class EmployerDictionariesTestItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор теста */
    public string $id;

    /** @var string Название теста */
    public string $name;
}
