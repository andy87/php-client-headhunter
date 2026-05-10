<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookPayloadNegotiationEmployerStateChange.
 */
class WebhookPayloadNegotiationEmployerStateChange extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['employer_manager_id' => 'employer_manager_id', 'from_state' => 'from_state', 'resume_id' => 'resume_id', 'to_state' => 'to_state', 'topic_id' => 'topic_id', 'transferred_at' => 'transferred_at', 'vacancy_id' => 'vacancy_id'];

    protected const REQUIRED_FIELDS = ['topic_id', 'vacancy_id', 'from_state', 'to_state', 'employer_manager_id', 'resume_id', 'transferred_at'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор менеджера, совершившего перевод */
    public string $employer_manager_id;

    /** @var string С какого статуса перевели */
    public string $from_state;

    /** @var string Идентификатор резюме */
    public string $resume_id;

    /** @var string На какой статус перевели */
    public string $to_state;

    /** @var string Идентификатор топика */
    public string $topic_id;

    /** @var string Время перевода на новый этап */
    public string $transferred_at;

    /** @var string Идентификатор вакансии */
    public string $vacancy_id;
}
