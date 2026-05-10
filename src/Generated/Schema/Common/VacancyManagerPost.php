<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyManagerPost.
 */
class VacancyManagerPost extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['id'];

    protected const CASTS = [];

    /** @var string|null Контактное лицо (менеджер) по размещаемой вакансии, по умолчанию текущий пользователь. Значение из [списка менеджеров компании](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers) */
    public ?string $id = null;
}
