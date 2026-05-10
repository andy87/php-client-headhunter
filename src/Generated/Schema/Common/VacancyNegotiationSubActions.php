<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyNegotiationSubActions.
 */
class VacancyNegotiationSubActions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'method' => 'method', 'name' => 'name', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'method', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор действия */
    public string $id;

    /** @var string HTTP метод, который необходимо выполнить */
    public string $method;

    /** @var string Название подстатуса */
    public string $name;

    /** @var string URL, на который необходимо выполнить запрос */
    public string $url;
}
