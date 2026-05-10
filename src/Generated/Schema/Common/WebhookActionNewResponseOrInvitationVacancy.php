<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookActionNewResponseOrInvitationVacancy.
 */
class WebhookActionNewResponseOrInvitationVacancy extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['settings' => 'settings', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type'];

    protected const NULLABLE_FIELDS = ['settings'];

    protected const CASTS = [];

    /** @var \Andy87\ClientsHh\Generated\Schema\Common\WebhookActionVacancyOnlyMineSettings|null Schema field settings */
    public ?\Andy87\ClientsHh\Generated\Schema\Common\WebhookActionVacancyOnlyMineSettings $settings = null;

    /** @var string Новый отклик или приглашение на вакансию. Данное событие будет вызываться как на отклик со стороны соискателя, так и на приглашение со стороны работодателя */
    public string $type;
}
