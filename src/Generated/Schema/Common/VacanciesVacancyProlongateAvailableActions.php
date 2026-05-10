<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacanciesVacancyProlongateAvailableActions.
 */
class VacanciesVacancyProlongateAvailableActions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['enabled' => 'enabled', 'id' => 'id', 'method' => 'method', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'enabled', 'url', 'method'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool Возможно ли выполнить действие */
    public bool $enabled;

    /** @var string Идентификатор действия */
    public string $id;

    /** @var string HTTP-метод запроса для выполнения действия */
    public string $method;

    /** @var string URL запроса для выполнения действия */
    public string $url;
}
