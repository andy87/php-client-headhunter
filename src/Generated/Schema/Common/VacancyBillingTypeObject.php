<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyBillingTypeObject.
 */
class VacancyBillingTypeObject extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['billing_type' => 'billing_type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['billing_type' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput|null Schema field billing_type */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyDeprecatedBillingTypeOutput $billing_type = null;
}
