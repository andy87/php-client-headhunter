<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsProfessionalRoleItem.
 */
class SuggestsProfessionalRoleItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accept_incomplete_resumes' => 'accept_incomplete_resumes', 'id' => 'id', 'text' => 'text'];

    protected const REQUIRED_FIELDS = ['id', 'text', 'accept_incomplete_resumes'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool Профессиональная роль, для которой можно принимать отклики неполным резюме */
    public bool $accept_incomplete_resumes;

    /** @var string Идентификатор профессиональной роли */
    public string $id;

    /** @var string Название профессиональной роли */
    public string $text;
}
