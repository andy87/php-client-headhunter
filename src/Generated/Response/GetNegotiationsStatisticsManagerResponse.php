<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/negotiations_statistics.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiations-statistics-manager
 */
class GetNegotiationsStatisticsManagerResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['manager_statistics' => 'manager_statistics'];

    protected const REQUIRED_FIELDS = ['manager_statistics'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['manager_statistics' => \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics::class];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatisticsManagerResponse::class;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics Response field manager_statistics */
    public \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics $manager_statistics;
}
