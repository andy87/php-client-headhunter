<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter WebhookPayloadNewNegotiationVacancy.
 */
class WebhookPayloadNewNegotiationVacancy extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chat_id' => 'chat_id', 'employer_id' => 'employer_id', 'negotiation_date' => 'negotiation_date', 'resume_id' => 'resume_id', 'topic_id' => 'topic_id', 'vacancy_id' => 'vacancy_id'];

    protected const REQUIRED_FIELDS = ['chat_id', 'topic_id', 'resume_id', 'vacancy_id', 'employer_id', 'negotiation_date'];

    protected const NULLABLE_FIELDS = ['resume_id', 'vacancy_id'];

    protected const CASTS = [];

    /** @var string Идентификатор чата для общения с кандидатом */
    public string $chat_id;

    /** @var string Идентификатор работодателя */
    public string $employer_id;

    /** @var string Дата отклика в формате [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) с точностью до секунды: `YYYY-MM-DDThh:mm:ss±hhmm` */
    public string $negotiation_date;

    /** @var string|null Идентификатор резюме */
    public ?string $resume_id;

    /** @var string Идентификатор топика */
    public string $topic_id;

    /** @var string|null Идентификатор вакансии */
    public ?string $vacancy_id;
}
