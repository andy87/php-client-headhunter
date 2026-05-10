<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerServicesBalance.
 */
class EmployerServicesBalance extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actual' => 'actual', 'initial' => 'initial'];

    protected const REQUIRED_FIELDS = ['actual', 'initial'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Текущее значение баланса */
    public int $actual;

    /** @var int Значение баланса на момент активации услуги */
    public int $initial;
}
