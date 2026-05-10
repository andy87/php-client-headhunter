<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter DictionariesCurrencyItem.
 */
class DictionariesCurrencyItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['abbr' => 'abbr', 'code' => 'code', 'defaultValue' => 'default', 'in_use' => 'in_use', 'name' => 'name', 'rate' => 'rate'];

    protected const REQUIRED_FIELDS = ['code', 'abbr', 'name', 'defaultValue', 'rate', 'in_use'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Краткое обозначение */
    public string $abbr;

    /** @var string Код */
    public string $code;

    /** @var bool Используется ли в качестве валюты по умолчанию? */
    public bool $defaultValue;

    /** @var bool Можно ли использовать на данном хосте? */
    public bool $in_use;

    /** @var string Название */
    public string $name;

    /** @var float Курс по отношению к рублю */
    public float $rate;
}
