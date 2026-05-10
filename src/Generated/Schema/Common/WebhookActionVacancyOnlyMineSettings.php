<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookActionVacancyOnlyMineSettings.
 */
class WebhookActionVacancyOnlyMineSettings extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['vacancies_only_mine' => 'vacancies_only_mine'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Если `true`, сервис будет присылать уведомления только о вакансиях текущего пользователя.

По умолчанию `false` — сервис будет присылать уведомления о всех вакансиях, к которым есть доступ
 */
    public ?bool $vacancies_only_mine = null;
}
