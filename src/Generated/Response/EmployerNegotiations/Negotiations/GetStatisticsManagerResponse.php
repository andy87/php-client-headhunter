<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\EmployerNegotiations\Negotiations;

use Andy87\ClientsHh\Generated\Response\GetNegotiationsStatisticsManagerResponse as BaseGetNegotiationsStatisticsManagerResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/negotiations_statistics.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiations-statistics-manager
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\NegotiationsNegotiationsStatistics $manager_statistics Response field manager_statistics
 */
class GetStatisticsManagerResponse extends BaseGetNegotiationsStatisticsManagerResponse
{
}
