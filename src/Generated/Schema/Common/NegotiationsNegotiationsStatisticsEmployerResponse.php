<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationsStatisticsEmployerResponse.
 */
class NegotiationsNegotiationsStatisticsEmployerResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['employer_statistics' => 'employer_statistics'];

    protected const REQUIRED_FIELDS = ['employer_statistics'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['employer_statistics' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics Schema field employer_statistics */
    public \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics $employer_statistics;
}
