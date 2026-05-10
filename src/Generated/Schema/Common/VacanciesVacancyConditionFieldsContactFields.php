<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsContactFields.
 */
class VacanciesVacancyConditionFieldsContactFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['email' => 'email', 'name' => 'name', 'phones' => 'phones'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['email', 'name', 'phones'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field email */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $email = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field name */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $name = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field phones */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $phones = null;
}
