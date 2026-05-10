<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesMatchVacancyFields.
 */
class VacanciesMatchVacancyFields extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'can_invite' => 'can_invite', 'created_at' => 'created_at', 'employer_negotiations_state' => 'employer_negotiations_state', 'manager' => 'manager', 'negotiations_actions' => 'negotiations_actions', 'negotiations_state' => 'negotiations_state', 'sort_point_distance' => 'sort_point_distance', 'templates' => 'templates'];

    protected const REQUIRED_FIELDS = ['negotiations_state', 'employer_negotiations_state', 'can_invite', 'negotiations_actions', 'manager', 'created_at'];

    protected const NULLABLE_FIELDS = ['address', 'employer_negotiations_state', 'negotiations_state', 'sort_point_distance'];

    protected const CASTS = ['manager' => \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput::class, 'negotiations_actions' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyNegotiationActions::class], 'templates' => [\Andy87\ClientsHh\Generated\Schema\Common\VacancyTemplates::class]];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacanciesAddress|null Schema field address */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\VacanciesAddress $address = null;

    /** @var bool Можно ли пригласить соискателя на данную вакансию */
    public bool $can_invite;

    /** @var string Дата и время публикации вакансии */
    public string $created_at;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Работодательское состояние отклика/приглашения для этой вакансии с указанным резюме, либо `null` если отклика/приглашения не было. Возможные значения перечислены в поле `employer_states` в [списке работодательских состояний по вакансии](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-negotiations) */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $employer_negotiations_state;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput Schema field manager */
    public \Andy87\ClientsHh\Generated\Schema\Common\VacancyManagerOutput $manager;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyNegotiationActions> Действия для [создания отклика](#tag/Otklikipriglasheniya-rabotodatelya/operation/invite-applicant-to-vacancy). Если создать отклик невозможно (например, нет нужных услуг), то вернется пустой массив */
    public array $negotiations_actions;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName|null Состояние отклика/приглашения для этой вакансии с указанным резюме, либо `null` если отклика/приглашения не было. Возможные значения перечислены в поле `negotiations_state` в [справочнике полей](#tag/Obshie-spravochniki/operation/get-dictionaries) */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\IncludesIdName $negotiations_state;

    /** @var float|null Расстояние в метрах между центром сортировки (заданной параметрами `sort_point_lat`, `sort_point_lng`) и указанным в вакансии адресом. В случае, если в адресе указаны только станции метро, выдается расстояние между центром сортировки и средней геометрической точкой указанных станций.
Значение `sort_point_distance` выдается только в случае, если заданы параметры `sort_point_lat`, `sort_point_lng`, `order_by=distance`
 */
    public ?float $sort_point_distance = null;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\VacancyTemplates>|null Шаблоны писем */
    public ?array $templates = null;
}
