<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployerManagersArea.
 */
class EmployerManagersArea extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор региона из [справочника](#tag/Obshie-spravochniki/operation/get-areas) */
    public string $id;

    /** @var string Название региона */
    public string $name;

    /** @var string Ссылка на информацию о регионе */
    public string $url;
}
