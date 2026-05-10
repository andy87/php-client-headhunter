<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersBrandingBrandingType.
 */
class EmployersBrandingBrandingType extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Тип брендирования:

  * `CONSTRUCTOR` — брендирование типом «конструктор»;
  * `MAKEUP` — брендирование типом «makeup» (хамелеон)
 */
    public ?string $type = null;
}
