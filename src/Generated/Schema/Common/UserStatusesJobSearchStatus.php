<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter UserStatusesJobSearchStatus.
 */
class UserStatusesJobSearchStatus extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'last_change_time' => 'last_change_time', 'name' => 'name'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Идентификатор статуса */
    public ?string $id = null;

    /** @var string|null Время, когда статус в последний раз менялся */
    public ?string $last_change_time = null;

    /** @var string|null Название статуса */
    public ?string $name = null;
}
