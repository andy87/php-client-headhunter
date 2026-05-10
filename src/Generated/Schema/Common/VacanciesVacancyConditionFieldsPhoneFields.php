<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyConditionFieldsPhoneFields.
 */
class VacanciesVacancyConditionFieldsPhoneFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['comment' => 'comment', 'number' => 'number'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['comment', 'number'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field comment */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $comment = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject|null Schema field number */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesNullableObject $number = null;
}
