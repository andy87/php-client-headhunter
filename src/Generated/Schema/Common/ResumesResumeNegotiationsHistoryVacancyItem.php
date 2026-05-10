<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Schema\Common;

use and_y87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumesResumeNegotiationsHistoryVacancyItem.
 */
class ResumesResumeNegotiationsHistoryVacancyItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['created_at' => 'created_at', 'employer_state' => 'employer_state', 'with_message' => 'with_message'];

    protected const REQUIRED_FIELDS = ['employer_state', 'created_at', 'with_message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['employer_state' => \and_y87\ClientsHh\Generated\Schema\Common\IncludesIdName::class];

    /** @var string Дата изменения состояния отклика/приглашения */
    public string $created_at;

    /** @var array<string, mixed> Schema field employer_state */
    public array $employer_state;

    /** @var bool Признак того, что при изменении состояния отклика/приглашения было отправлено сообщение соискателю */
    public bool $with_message;
}
