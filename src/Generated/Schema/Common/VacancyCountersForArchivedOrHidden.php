<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyCountersForArchivedOrHidden.
 */
class VacancyCountersForArchivedOrHidden extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['responses' => 'responses', 'total_responses' => 'total_responses', 'invitations_and_responses' => 'invitations_and_responses'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Количество откликов на вакансию с момента публикации */
    public ?float $responses = null;

    /** @var float|null Количество откликов на вакансию с момента создания */
    public ?float $total_responses = null;

    /** @var float|null Количество откликов и приглашений на вакансию */
    public ?float $invitations_and_responses = null;
}
