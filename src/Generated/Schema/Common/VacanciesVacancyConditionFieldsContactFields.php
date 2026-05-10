<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsContactFields.
 */
class VacanciesVacancyConditionFieldsContactFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['email' => 'email', 'name' => 'name', 'phones' => 'phones'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['email', 'name', 'phones'];

    protected const CASTS = [];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field email */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $email = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field name */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $name = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field phones */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $phones = null;
}
