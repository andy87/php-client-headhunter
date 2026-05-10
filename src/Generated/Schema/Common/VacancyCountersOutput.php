<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter VacancyCountersOutput.
 */
class VacancyCountersOutput extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['calls' => 'calls', 'invitations' => 'invitations', 'invitations_and_responses' => 'invitations_and_responses', 'new_missed_calls' => 'new_missed_calls', 'responses' => 'responses', 'resumes_in_progress' => 'resumes_in_progress', 'unread_responses' => 'unread_responses', 'views' => 'views'];

    protected const REQUIRED_FIELDS = ['views', 'responses', 'unread_responses', 'resumes_in_progress', 'invitations', 'invitations_and_responses', 'calls', 'new_missed_calls'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Общее количество звонков */
    public float $calls;

    /** @var float Количество приглашений на вакансию */
    public float $invitations;

    /** @var float Количество откликнувшихся и приглашенных соискателей на вакансию */
    public float $invitations_and_responses;

    /** @var float Общее количество новых пропущенных звонков */
    public float $new_missed_calls;

    /** @var float Количество откликов на вакансию */
    public float $responses;

    /** @var float Количество резюме в работе на вакансию */
    public float $resumes_in_progress;

    /** @var float Количество непросмотренных откликов на вакансию */
    public float $unread_responses;

    /** @var float Количество просмотров вакансии */
    public float $views;
}
