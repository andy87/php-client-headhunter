<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /employers/{employer_id}/vacancies/hidden.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-hidden-vacancies
 */
class GetHiddenVacanciesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['found', 'page', 'pages', 'per_page', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyArchived::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\VacanciesDeletedVacancyListResponse::class;

    /** @var int Найдено результатов */
    public int $found;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacancyArchived> Список удаленных вакансий */
    public array $items;
}
