<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\CommonReferenceData\Areas;

use Andy87\ClientsHh\Generated\Prompt\GetAreasPrompt as BaseGetAreasPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /areas.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-areas
 *
 * @property string|null $additional_case Применимо только к русской локализации. В дополнительном поле вернется название региона в указанном падеже. Поддерживается только значение `prepositional` — предложный падеж
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetPrompt extends BaseGetAreasPrompt
{
}
