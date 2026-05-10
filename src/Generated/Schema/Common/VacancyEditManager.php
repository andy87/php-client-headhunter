<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyEditManager.
 */
class VacancyEditManager extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['manager' => 'manager'];

    protected const REQUIRED_FIELDS = ['manager'];

    protected const NULLABLE_FIELDS = ['manager'];

    protected const CASTS = ['manager' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesId::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\IncludesId|null Идентификатор менеджера, которому надо передать автопоиск из ([списка менеджеров компании](#tag/Menedzhery-rabotodatelya/operation/get-employer-managers)) */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\IncludesId $manager;
}
