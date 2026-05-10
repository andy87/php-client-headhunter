<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDeprecatedTypeOutput.
 */
class VacancyDeprecatedTypeOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Тип из [справочника vacancy_type](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public string $id;

    /** @var string|null Название типа вакансии */
    public ?string $name = null;
}
