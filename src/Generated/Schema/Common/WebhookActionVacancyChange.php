<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookActionVacancyChange.
 */
class WebhookActionVacancyChange extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['settings' => 'settings', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = ['settings'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\WebhookActionVacancyOnlyMineSettings|null Schema field settings */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\WebhookActionVacancyOnlyMineSettings $settings = null;

    /** @var string Изменение вакансии. Аккумулирует изменения, внесенные за несколько последних секунд, и отправляет вебхук, содержащий время последнего изменения.

Если вы внесете два изменения с разницей в одну секунду, сервис отправит только один вебхук, который будет содержать время последнего изменения. Если изменение одно, сервис отправит вебхук с задержкой в несколько секунд
 */
    public string $type;
}
