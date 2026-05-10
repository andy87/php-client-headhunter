<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyInsiderInterview.
 */
class VacancyInsiderInterview extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор интервью */
    public string $id;

    /** @var string Адрес страницы, содержащей интервью */
    public string $url;
}
