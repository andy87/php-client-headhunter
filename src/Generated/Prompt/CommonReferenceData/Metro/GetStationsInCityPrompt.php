<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Prompt\CommonReferenceData\Metro;

use and_y87\ClientsHh\Generated\Prompt\GetMetroStationsInCityPrompt as BaseGetMetroStationsInCityPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /metro/{city_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-metro-stations-in-city
 *
 * @property string $city_id Идентификатор города
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetStationsInCityPrompt extends BaseGetMetroStationsInCityPrompt
{
}
