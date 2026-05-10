<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookActionNegotiationEmployerStateChange.
 */
class WebhookActionNegotiationEmployerStateChange extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['settings' => 'settings', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = ['settings'];

    protected const CASTS = [];

    /** @var \and_y87\ClientsHh\Generated\Schema\Common\WebhookActionVacancyOnlyMineSettings|null Schema field settings */
    public ?\and_y87\ClientsHh\Generated\Schema\Common\WebhookActionVacancyOnlyMineSettings $settings = null;

    /** @var string Перемещение резюме кандидата на другой этап вакансии.

Содержит следующую информацию:

* кто переместил резюме;
* идентификатор резюме;
* исходный статус резюме;
* новый статус резюме
 */
    public string $type;
}
