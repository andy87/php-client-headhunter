<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyAutoResponse.
 */
class VacancyAutoResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accept_auto_response' => 'accept_auto_response'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Schema field accept_auto_response */
    public ?bool $accept_auto_response = null;
}
