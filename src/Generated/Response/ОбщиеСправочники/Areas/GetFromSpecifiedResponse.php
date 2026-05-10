<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ОбщиеСправочники\Areas;

use Andy87\ClientsHh\Generated\Response\GetAreasFromSpecifiedResponse as BaseGetAreasFromSpecifiedResponse;

/**
 * Ответ HeadHunter API [GET] /areas/{area_id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-areas-from-specified
 *
 * @property string $id Идентификатор региона из [справочника](#tag/Obshie-spravochniki/operation/get-areas)
 * @property float|null $lat Широта региона
 * @property float|null $lng Долгота региона
 * @property string $name Название региона
 * @property string|null $name_prepositional Применимо только для русской локализации. Название региона в предложном падеже с предлогом `в`, например: `в Москве`. Возвращается, если в запросе передан параметр `additional_case=prepositional`
 * @property string|null $parent_id Идентификатор родительского региона
 * @property string|null $utc_offset Смещение часового пояса региона относительно UTC, формат `+HH:MM` или `-HH:MM`
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\DictionariesAreaItem> $areas Дочерние регионы
 */
class GetFromSpecifiedResponse extends BaseGetAreasFromSpecifiedResponse
{
}
