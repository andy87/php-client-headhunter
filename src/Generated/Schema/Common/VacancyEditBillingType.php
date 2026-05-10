<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyEditBillingType.
 */
class VacancyEditBillingType extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['billing_type' => 'billing_type'];

    protected const REQUIRED_FIELDS = ['billing_type'];

    protected const NULLABLE_FIELDS = ['billing_type'];

    protected const CASTS = ['billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingType::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingType|null Schema field billing_type */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingType $billing_type;
}
