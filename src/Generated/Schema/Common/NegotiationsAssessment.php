<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter NegotiationsAssessment.
 */
class NegotiationsAssessment extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'name' => 'name', 'actions' => 'actions'];

    protected const REQUIRED_FIELDS = ['id', 'name', 'actions'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['actions' => [\and_y87\ClientsHh\Generated\Schema\Common\NegotiationsAction::class]];

    /** @var string Идентификатор */
    public string $id;

    /** @var string Название */
    public string $name;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\NegotiationsAction> Инструменты оценки */
    public array $actions;
}
