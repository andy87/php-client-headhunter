<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesUpgradeFieldsWithoutAction.
 */
class VacanciesUpgradeFieldsWithoutAction extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reason' => 'reason'];

    protected const REQUIRED_FIELDS = ['reason'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Описание причины, по которой улучшение вакансии до данного типа невозможно */
    public string $reason;
}
