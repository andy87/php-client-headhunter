<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsVacancyPositionItem.
 */
class SuggestsVacancyPositionItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'professional_roles' => 'professional_roles', 'text' => 'text'];

    protected const REQUIRED_FIELDS = ['id', 'text', 'professional_roles'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['professional_roles' => [\and_y87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoleItemWithName::class]];

    /** @var string Идентификатор должности */
    public string $id;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsProfessionalRoleItemWithName> Информация о профессиональных ролях, соответствующих должности */
    public array $professional_roles;

    /** @var string Название должности */
    public string $text;
}
