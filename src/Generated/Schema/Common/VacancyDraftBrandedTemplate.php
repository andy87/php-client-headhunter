<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyDraftBrandedTemplate.
 */
class VacancyDraftBrandedTemplate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id'];

    protected const REQUIRED_FIELDS = ['id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор брендированного шаблона вакансий работодателя из [списка доступных](#tag/Informaciya-o-rabotodatele/operation/get-vacancy-branded-templates-list) */
    public string $id;
}
