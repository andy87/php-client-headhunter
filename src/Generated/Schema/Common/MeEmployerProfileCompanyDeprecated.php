<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter MeEmployerProfileCompanyDeprecated.
 */
class MeEmployerProfileCompanyDeprecated extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'manager_id' => 'manager_id'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'manager_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор компании */
    public string $id;

    /** @var string Название компании */
    public string $name;

    /** @var string Идентификатор менеджера */
    public string $manager_id;
}
