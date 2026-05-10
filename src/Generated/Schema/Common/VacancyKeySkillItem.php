<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyKeySkillItem.
 */
class VacancyKeySkillItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Название ключевого навыка (максимальная длина - 100 символов) */
    public ?string $name = null;
}
