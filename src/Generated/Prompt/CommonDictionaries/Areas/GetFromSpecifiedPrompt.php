<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Prompt\CommonDictionaries\Areas;

use Andy87\ClientsHh\Generated\Prompt\GetAreasFromSpecifiedPrompt as BaseGetAreasFromSpecifiedPrompt;

/**
 * Класс данных запроса HeadHunter API [GET] /areas/{area_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-areas-from-specified
 *
 * @property string $area_id Идентификатор региона из справочника [/areas](#tag/Obshie-spravochniki/operation/get-areas)
 * @property string|null $additional_case Применимо только к русской локализации. В дополнительном поле вернется название региона в указанном падеже. Поддерживается только значение `prepositional` — предложный падеж
 * @property string|null $host Доменное имя сайта (см. [Выбор сайта](#section/Obshaya-informaciya/Vybor-sajta))
 * @property string|null $locale Идентификатор локали (см. [Локализация](#tag/Obshie-spravochniki/operation/get-locales))
 * @property string|null $HH_User_Agent Название приложения и контактная почта разработчика (см. [Информация о клиенте](#section/Obshaya-informaciya/Trebovaniya-k-zaprosam))
 */
class GetFromSpecifiedPrompt extends BaseGetAreasFromSpecifiedPrompt
{
}
