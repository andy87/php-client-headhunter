<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/vacancy_positions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancy-positions-suggests
 */
class GetVacancyPositionsSuggestsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\SuggestsVacancyPositionItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\SuggestsVacancyPositions::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\SuggestsVacancyPositionItem> Информация о найденных должностях вакансий */
    public array $items;
}
