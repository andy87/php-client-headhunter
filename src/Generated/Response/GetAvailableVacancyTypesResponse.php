<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/managers/{manager_id}/vacancies/available_types.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-available-vacancy-types
 */
class GetAvailableVacancyTypesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\VacanciesAvailableVacancyTypeItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\VacanciesAvailableVacancyTypeResponse::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\VacanciesAvailableVacancyTypeItem> Массив вариантов публикации вакансии */
    public array $items;
}
