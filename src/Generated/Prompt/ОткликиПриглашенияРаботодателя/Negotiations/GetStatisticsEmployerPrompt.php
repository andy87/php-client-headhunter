<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\ОткликиПриглашенияРаботодателя\Negotiations;

use Andy87\ClientsHh\Generated\Prompt\GetNegotiationsStatisticsEmployerPrompt as BaseGetNegotiationsStatisticsEmployerPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /employers/{employer_id}/negotiations_statistics.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-negotiations-statistics-employer
 *
 * @property string $employer_id Идентификатор работодателя
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetStatisticsEmployerPrompt extends BaseGetNegotiationsStatisticsEmployerPrompt
{
}
