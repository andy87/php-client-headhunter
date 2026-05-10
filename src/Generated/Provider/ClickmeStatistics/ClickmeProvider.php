<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\ClickmeStatistics;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetClickmeStatisticsPrompt;
use and_y87\ClientsHh\Generated\Response\ClickmeStatistics\Clickme\GetStatisticsResponse;

/**
 * Группа методов "clickme" раздела HeadHunter API "Статистика рекламных кампаний в Clickme".
 */
class ClickmeProvider extends BaseHhProvider
{
    /**
     * Получение информации о статистике рекламных кампаний в Clickme
     *
     * OperationId: get-clickme-statistics.
     * HTTP: GET /clickme/statistics.
     *
     * @param GetClickmeStatisticsPrompt $prompt DTO запроса.
     *
     * @return GetStatisticsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStatistics(GetClickmeStatisticsPrompt $prompt): GetStatisticsResponse
    {
        /** @var GetStatisticsResponse $response */
        $response = $this->request($prompt, GetStatisticsResponse::class);

        return $response;
    }
}
