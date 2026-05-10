<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsEducationElementary.
 */
class ResumeObjectsEducationElementary extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['year', 'name'];

    protected const NULLABLE_FIELDS = ['id'];

    protected const CASTS = [];

    /** @var string|null Идентификатор */
    public ?string $id = null;

    /** @var string Название учебного заведения */
    public string $name;

    /** @var float Год окончания */
    public float $year;
}
