<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter EmployersFunnelStage.
 */
class EmployersFunnelStage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'state' => 'state', 'substate' => 'substate'];

    protected const REQUIRED_FIELDS = ['id', 'state'];

    protected const NULLABLE_FIELDS = ['substate'];

    protected const CASTS = ['state' => \Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployersState::class];

    /** @var string Идентификатор этапа воронки */
    public string $id;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployersState Schema field state */
    public \Andy87\ClientsHh\Generated\Schema\Common\EmployersEmployersState $state;

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\EmployersFunnelSubstate|null Информация о подстатусе воронки найма */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\EmployersFunnelSubstate $substate = null;
}
