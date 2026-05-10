<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/drafts/{draft_id}/duplicates.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/search-for-vacancy-draft-duplicates
 */
class SearchForVacancyDraftDuplicatesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['found' => 'found', 'has_duplicates' => 'has_duplicates', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['has_duplicates', 'found', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\VacancyDuplicates::class;

    /** @var float Общее количество дубликатов вакансии */
    public float $found;

    /** @var bool Существуют ли дубликаты вакансии */
    public bool $has_duplicates;

    /** @var array<int, float> Список идентификаторов дубликатов вакансии */
    public array $items;
}
