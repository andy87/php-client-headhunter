<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter _IncludesContactPhoneValue.
 */
class IncludesContactPhoneValue extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['city' => 'city', 'country' => 'country', 'formatted' => 'formatted', 'number' => 'number'];

    protected const REQUIRED_FIELDS = ['country', 'city', 'number', 'formatted'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Код города */
    public string $city;

    /** @var string Код страны */
    public string $country;

    /** @var string Отформатированный номер телефона */
    public string $formatted;

    /** @var string Номер телефона */
    public string $number;
}
