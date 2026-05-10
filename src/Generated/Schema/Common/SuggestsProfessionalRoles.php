<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsProfessionalRoles.
 */
class SuggestsProfessionalRoles extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoleItem::class]];

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoleItem> Информация о найденных профессиональных ролях */
    public array $items;
}
