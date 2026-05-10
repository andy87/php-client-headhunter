<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\EmployerNegotiations\Negotiations;

use Andy87\ClientsHh\Generated\Response\GetNegotiationsStatisticsEmployerResponse as BaseGetNegotiationsStatisticsEmployerResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/negotiations_statistics.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiations-statistics-employer
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics $employer_statistics Response field employer_statistics
 */
class GetStatisticsEmployerResponse extends BaseGetNegotiationsStatisticsEmployerResponse
{
}
