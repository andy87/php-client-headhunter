<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyProlongate.
 */
class VacanciesVacancyProlongate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actions' => 'actions', 'expires_at' => 'expires_at', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'expires_at', 'actions'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, mixed> Список действий, которые можно предпринять для продления вакансии */
    public array $actions;

    /** @var string Дата окончания публикации вакансии */
    public string $expires_at;

    /** @var string Идентификатор вакансии */
    public string $id;
}
