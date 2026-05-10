<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsTotalExperience.
 */
class ResumeObjectsTotalExperience extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['months' => 'months'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['months'];

    protected const CASTS = [];

    /** @var float|null Общий опыт работы в месяцах, с округлением до месяца */
    public ?float $months = null;
}
