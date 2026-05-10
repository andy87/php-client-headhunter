<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ProfileFieldsExperienceGroupItem.
 */
class ProfileFieldsExperienceGroupItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['duration' => 'duration', 'experience_ids' => 'experience_ids'];

    protected const REQUIRED_FIELDS = ['duration', 'experience_ids'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Длительность работы в компании (в месяцах) */
    public int $duration;

    /** @var array<int, string> Список идентификаторов записей опыта работы */
    public array $experience_ids;
}
