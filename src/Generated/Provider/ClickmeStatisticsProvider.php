<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetClickmeStatisticsPrompt;
use Andy87\ClientsHh\Generated\Response\GetClickmeStatisticsResponse;

/**
 * Provider раздела HeadHunter API "Статистика рекламных кампаний в Clickme".
 * @property-read ClickmeStatistics\ClickmeProvider $clickme
 *
 */
class ClickmeStatisticsProvider extends BaseHhProvider
{
    protected const OPERATION_GROUPS = [
        'clickme' => ClickmeStatistics\ClickmeProvider::class,
    ];

    /**
     * Получение информации о статистике рекламных кампаний в Clickme
     *
     * OperationId: get-clickme-statistics.
     * HTTP: GET /clickme/statistics.
     *
     * @param GetClickmeStatisticsPrompt $prompt DTO запроса.
     *
     * @return GetClickmeStatisticsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getClickmeStatistics(GetClickmeStatisticsPrompt $prompt): GetClickmeStatisticsResponse
    {
        /** @var ClickmeStatistics\ClickmeProvider $group */
        $group = $this->operationGroup('clickme');

        return $group->getStatistics($prompt);
    }
}
