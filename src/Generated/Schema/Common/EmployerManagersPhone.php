<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersPhone.
 */
class EmployerManagersPhone extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['city' => 'city', 'comment' => 'comment', 'country' => 'country', 'formatted' => 'formatted', 'number' => 'number'];

    protected const REQUIRED_FIELDS = ['country', 'city', 'number'];

    protected const NULLABLE_FIELDS = ['comment'];

    protected const CASTS = [];

    /** @var string Код города */
    public string $city;

    /** @var string|null Комментарий */
    public ?string $comment = null;

    /** @var string Код страны */
    public string $country;

    /** @var string|null Номер телефона отформатированный */
    public ?string $formatted = null;

    /** @var string Номер */
    public string $number;
}
