<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsNegotiationsStatisticsManagerResponse.
 */
class NegotiationsNegotiationsStatisticsManagerResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['manager_statistics' => 'manager_statistics'];

    protected const REQUIRED_FIELDS = ['manager_statistics'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['manager_statistics' => \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics Schema field manager_statistics */
    public \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics $manager_statistics;
}
