<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter SuggestsEducationalInstitutions.
 */
class SuggestsEducationalInstitutions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesEducationalInstitutionItem::class]];

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesEducationalInstitutionItem> Информация о найденных учебных заведениях */
    public array $items;
}
