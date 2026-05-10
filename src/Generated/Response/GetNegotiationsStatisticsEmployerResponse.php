<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/negotiations_statistics.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiations-statistics-employer
 */
class GetNegotiationsStatisticsEmployerResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['employer_statistics' => 'employer_statistics'];

    protected const REQUIRED_FIELDS = ['employer_statistics'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['employer_statistics' => \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics::class];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatisticsEmployerResponse::class;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics Response field employer_statistics */
    public \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics $employer_statistics;
}
