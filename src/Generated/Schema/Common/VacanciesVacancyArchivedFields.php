<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyArchivedFields.
 */
class VacanciesVacancyArchivedFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['archived_at' => 'archived_at', 'closed_for_applicants' => 'closed_for_applicants', 'counters' => 'counters', 'created_at' => 'created_at', 'sort_point_distance' => 'sort_point_distance', 'vacancy_properties' => 'vacancy_properties'];

    protected const REQUIRED_FIELDS = ['counters', 'vacancy_properties', 'closed_for_applicants', 'archived_at', 'created_at'];

    protected const NULLABLE_FIELDS = ['sort_point_distance'];

    protected const CASTS = ['closed_for_applicants' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants::class, 'counters' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersForArchivedOrHidden::class, 'vacancy_properties' => \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties::class];

    /** @var string Дата и время архивации вакансии */
    public string $archived_at;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants Schema field closed_for_applicants */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyClosedForApplicants $closed_for_applicants;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersForArchivedOrHidden Schema field counters */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyCountersForArchivedOrHidden $counters;

    /** @var string Дата и время публикации вакансии */
    public string $created_at;

    /** @var float|null Расстояние в метрах между центром сортировки (заданной параметрами `sort_point_lat`, `sort_point_lng`) и указанным в вакансии адресом. В случае, если в адресе указаны только станции метро, выдается расстояние между центром сортировки и средней геометрической точкой указанных станций.

Значение `sort_point_distance` выдается только в случае, если заданы параметры `sort_point_lat`, `sort_point_lng`, `order_by=distance`
 */
    public ?float $sort_point_distance = null;

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties Свойства вакансии, такие как тариф, анонимность и другие */
    public \and_y87\ClientsHh\Generated\Schema\Common\VacancyVacancyProperties $vacancy_properties;
}
