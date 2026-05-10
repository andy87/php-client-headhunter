<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Schema\Common;

use Andy87\ClientsHh\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель HeadHunter ResumeObjectsNegotiationsHistoryForEmployer.
 */
class ResumeObjectsNegotiationsHistoryForEmployer extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['url' => 'url', 'vacancies' => 'vacancies'];

    protected const REQUIRED_FIELDS = ['url'];

    protected const NULLABLE_FIELDS = ['vacancies'];

    protected const CASTS = ['vacancies' => [\Andy87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancy::class]];

    /** @var string URL, на который необходимо сделать GET-запрос, чтобы получить [подробную историю откликов/приглашений](#tag/Otklikipriglasheniya-rabotodatelya/operation/get-resume-negotiations-history) по данному резюме */
    public string $url;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancy>|null Массив вакансий */
    public ?array $vacancies = null;
}
