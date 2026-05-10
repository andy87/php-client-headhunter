<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerServicesEmployerServiceItem.
 */
class EmployerServicesEmployerServiceItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['activated_at' => 'activated_at', 'balance' => 'balance', 'expires_at' => 'expires_at', 'id' => 'id', 'service_type' => 'service_type'];

    protected const REQUIRED_FIELDS = ['id', 'service_type', 'activated_at', 'expires_at'];

    protected const NULLABLE_FIELDS = ['balance'];

    protected const CASTS = ['service_type' => \and_y87\ClientsHh\Generated\Schema\Common\EmployerServicesServiceType::class];

    /** @var string Время активации услуги (в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm` */
    public string $activated_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Значения баланса. Только для пакетных услуг */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $balance = null;

    /** @var string Время истечения услуги (в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm` */
    public string $expires_at;

    /** @var string Идентификатор услуги */
    public string $id;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\EmployerServicesServiceType Тип услуги */
    public \and_y87\ClientsHh\Generated\Schema\Common\EmployerServicesServiceType $service_type;
}
