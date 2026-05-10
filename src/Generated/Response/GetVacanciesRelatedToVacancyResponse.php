<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /vacancies/{vacancy_id}/related_vacancies.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-vacancies-related-to-vacancy
 */
class GetVacanciesRelatedToVacancyResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items', 'found' => 'found', 'page' => 'page', 'pages' => 'pages', 'per_page' => 'per_page', 'clusters' => 'clusters', 'arguments' => 'arguments', 'alternate_url' => 'alternate_url', 'fixes' => 'fixes', 'suggests' => 'suggests'];

    protected const REQUIRED_FIELDS = ['items', 'found', 'page', 'pages', 'per_page'];

    protected const NULLABLE_FIELDS = ['clusters', 'arguments', 'alternate_url'];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacanciesItem::class], 'clusters' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesClusterItem::class], 'arguments' => [\Andy87\ClientsHh\Generated\Schema\Common\VacanciesArgumentItem::class], 'fixes' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesFixes::class, 'suggests' => \Andy87\ClientsHh\Generated\Schema\Common\VacanciesSuggests::class];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacanciesResponse::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesVacanciesItem> Список вакансий */
    public array $items;

    /** @var int Найдено результатов */
    public int $found;

    /** @var int Номер страницы */
    public int $page;

    /** @var int Всего страниц */
    public int $pages;

    /** @var int Результатов на странице */
    public int $per_page;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesClusterItem>|null Массив [кластеров поиска](#tag/Poisk-vakansij/Klastery-v-poiske-vakansij) */
    public ?array $clusters = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacanciesArgumentItem>|null Массив параметров поиска, переданных в запросе.

Возвращается только если в запросе передан параметр `describe_arguments=true`. В массиве выдаются только те параметры, которые влияют на поиск вакансий. Неизвестные параметры игнорируются. Элемент списка с одним значением `argument` может повторяться несколько раз, если параметр имеет несколько значений
 */
    public ?array $arguments = null;

    /** @var string|null Ссылка на вакансию */
    public ?string $alternate_url = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesFixes|null Response field fixes */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesFixes $fixes = null;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesSuggests|null Response field suggests */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesSuggests $suggests = null;
}
