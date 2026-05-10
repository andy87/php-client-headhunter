<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\ClickmeStatistics\Clickme;

use and_y87\ClientsHh\Generated\Prompt\GetClickmeStatisticsPrompt as BaseGetClickmeStatisticsPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /clickme/statistics.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-clickme-statistics
 *
 * @property string $date_from Дата, от которой нужно начать поиск. Значение указывается в формате [ISO 8601](#date-format) — `YYYY-MM-DD`
 * @property string $date_to Дата, до которой нужно искать включительно. Значение указывается в формате [ISO 8601](#date-format) — `YYYY-MM-DD`
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetStatisticsPrompt extends BaseGetClickmeStatisticsPrompt
{
}
