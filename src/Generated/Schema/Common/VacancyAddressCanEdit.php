<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyAddressCanEdit.
 */
class VacancyAddressCanEdit extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['can_edit' => 'can_edit'];

    protected const REQUIRED_FIELDS = ['can_edit'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool Имеет ли текущий пользователь право редактировать этот адрес */
    public bool $can_edit;
}
