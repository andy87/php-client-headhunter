<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancySetterVacancyProperties.
 */
class VacancySetterVacancyProperties extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['properties' => 'properties'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Список свойств вакансии. Необходимо передавать список свойств, соответствующих доступному варианту публикации вакансии. Какой набор свойств передавать при публикации вакансий можно узнать в поле vacancy_properties.required в [доступных вариантах публикации](#tag/Uslugi-rabotodatelya/operation/get-vacancy-available-services-list) */
    public ?array $properties = null;
}
