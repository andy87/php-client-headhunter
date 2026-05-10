<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ManagerSettingsCurrency.
 */
class ManagerSettingsCurrency extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['abbr' => 'abbr', 'code' => 'code', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['code', 'name', 'abbr'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Краткое обозначение валюты */
    public string $abbr;

    /** @var string Код валюты */
    public string $code;

    /** @var string Название валюты */
    public string $name;
}
