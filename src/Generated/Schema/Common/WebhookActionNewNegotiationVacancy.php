<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookActionNewNegotiationVacancy.
 */
class WebhookActionNewNegotiationVacancy extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['settings' => 'settings', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = ['settings'];

    protected const CASTS = [];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\WebhookActionVacancyOnlyMineSettings|null Schema field settings */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\WebhookActionVacancyOnlyMineSettings $settings = null;

    /** @var string Новый отклик на вакансию. Данное событие будет вызываться только на отклик со стороны соискателя */
    public string $type;
}
