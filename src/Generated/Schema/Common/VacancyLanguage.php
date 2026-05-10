<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyLanguage.
 */
class VacancyLanguage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'level' => 'level'];

    protected const REQUIRED_FIELDS = ['id', 'level'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор языка. Значения из справочника [/languages](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public string $id;

    /** @var array<string, mixed> Schema field level */
    public array $level;
}
