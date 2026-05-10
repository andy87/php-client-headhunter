<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ManagerAccount.
 */
class ManagerAccount extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['employer' => 'employer', 'id' => 'id'];

    protected const REQUIRED_FIELDS = ['id', 'employer'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['employer' => \Andy87\ClientsHh\Generated\Schema\Common\ManagerAccountCompany::class];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\ManagerAccountCompany Schema field employer */
    public \Andy87\ClientsHh\Generated\Schema\Common\ManagerAccountCompany $employer;

    /** @var string Идентификатор рабочего аккаунта менеджера */
    public string $id;
}
