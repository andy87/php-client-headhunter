<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsSpecializationsWithName.
 */
class SuggestsSpecializationsWithName extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'profarea_id' => 'profarea_id', 'profarea_name' => 'profarea_name'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'profarea_id', 'profarea_name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор специализации */
    public string $id;

    /** @var string Название специализации */
    public string $name;

    /** @var string Идентификатор профессиональной области */
    public string $profarea_id;

    /** @var string Название профессиональной области */
    public string $profarea_name;
}
