<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ProfessionalRolesCategory.
 */
class ProfessionalRolesCategory extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'roles' => 'roles'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'roles'];

    protected const NULLABLE_FIELDS = ['name'];

    protected const CASTS = ['roles' => [\Andy87\ClientsHh\Generated\Schema\Common\ProfessionalRolesRole::class]];

    /** @var string Идентификатор категории профессиональной роли */
    public string $id;

    /** @var string|null Имя категории профессиональной роли */
    public ?string $name;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ProfessionalRolesRole> Список профессиональных ролей, входящих в эту категорию
 */
    public array $roles;
}
