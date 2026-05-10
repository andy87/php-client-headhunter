<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ProfessionalRolesCatalog.
 */
class ProfessionalRolesCatalog extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['categories' => 'categories'];

    protected const REQUIRED_FIELDS = ['categories'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['categories' => [\and_y87\ClientsHh\Generated\Schema\Common\ProfessionalRolesCategory::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ProfessionalRolesCategory> Информация о категории профессиональной роли */
    public array $categories;
}
