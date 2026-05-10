<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\ОткликиПриглашенияРаботодателя\Collection;

use Andy87\ClientsHh\Generated\Response\GetCollectionNegotiationsListResponse as BaseGetCollectionNegotiationsListResponse;

/**
 * Ответ HeadHunter API [GET] /negotiations/response.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-collection-negotiations-list
 *
 * @property \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $ordered_by Применяемый тип сортировки
 * @property int $found Найдено результатов
 * @property int $page Номер страницы
 * @property int $pages Всего страниц
 * @property int $per_page Результатов на странице
 * @property int|null $hidden_count Количество скрытых откликов/приглашений
 * @property array<int, mixed> $items Response field items
 */
class GetNegotiationsListResponse extends BaseGetCollectionNegotiationsListResponse
{
}
