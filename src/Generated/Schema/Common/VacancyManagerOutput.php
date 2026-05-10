<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyManagerOutput.
 */
class VacancyManagerOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['first_name' => 'first_name', 'id' => 'id', 'last_name' => 'last_name', 'middle_name' => 'middle_name'];

    protected const REQUIRED_FIELDS = ['id', 'first_name', 'last_name', 'middle_name'];

    protected const NULLABLE_FIELDS = ['middle_name'];

    protected const CASTS = [];

    /** @var string Имя менеджера */
    public string $first_name;

    /** @var string Контактное лицо (менеджер) по размещаемой вакансии, по умолчанию текущий пользователь */
    public string $id;

    /** @var string Фамилия менеджера */
    public string $last_name;

    /** @var string|null Второе имя менеджера */
    public ?string $middle_name;
}
