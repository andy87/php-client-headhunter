<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyBrandedTemplate.
 */
class VacancyBrandedTemplate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['id', 'name'];

    protected const CASTS = [];

    /** @var string|null Идентификатор брендированного шаблона вакансий */
    public ?string $id = null;

    /** @var string|null Название брендированного шаблона вакансий */
    public ?string $name = null;
}
