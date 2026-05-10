<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/vacancy_areas/active.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-employer-vacancy-areas
 */
class GetEmployerVacancyAreasResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items', 'found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesArea::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployerVacancyAreasResponse::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesArea> Список регионов */
    public array $items;

    /** @var int Найдено результатов */
    public int $found;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;
}
