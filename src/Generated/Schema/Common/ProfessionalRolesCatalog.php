<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ProfessionalRolesCatalog.
 */
class ProfessionalRolesCatalog extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['categories' => 'categories'];

    protected const REQUIRED_FIELDS = ['categories'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['categories' => [\Andy87\ClientsHh\Generated\Schema\Common\ProfessionalRolesCategory::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ProfessionalRolesCategory> Информация о категории профессиональной роли */
    public array $categories;
}
