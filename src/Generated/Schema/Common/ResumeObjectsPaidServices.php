<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsPaidServices.
 */
class ResumeObjectsPaidServices extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['active' => 'active', 'expires' => 'expires', 'id' => 'id', 'name' => 'name'];

    protected const REQUIRED_FIELDS = ['id', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Активна ли в данный момент услуга */
    public ?bool $active = null;

    /** @var string|null Время окончания действия услуги, если услуга активна */
    public ?string $expires = null;

    /** @var string Идентификатор услуги */
    public string $id;

    /** @var string Название услуги */
    public string $name;
}
