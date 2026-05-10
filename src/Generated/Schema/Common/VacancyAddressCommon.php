<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyAddressCommon.
 */
class VacancyAddressCommon extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['address'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyAddressOutput|null Schema field address */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacancyAddressOutput $address = null;
}
