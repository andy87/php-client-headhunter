<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookActionVacancyPublicationForVacancyManager.
 */
class WebhookActionVacancyPublicationForVacancyManager extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Публикация вакансии. Событие присылается только для менеджера-владельца вакансии при создании вакансии, отложенной публикации или публикации из черновика */
    public string $type;
}
