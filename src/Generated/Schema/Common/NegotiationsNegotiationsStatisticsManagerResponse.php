<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationsStatisticsManagerResponse.
 */
class NegotiationsNegotiationsStatisticsManagerResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['manager_statistics' => 'manager_statistics'];

    protected const REQUIRED_FIELDS = ['manager_statistics'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['manager_statistics' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics::class];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics Schema field manager_statistics */
    public \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics $manager_statistics;
}
