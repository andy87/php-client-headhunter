<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /resumes/{resume_id}/negotiations_history.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-resume-negotiations-history
 */
class GetResumeNegotiationsHistoryResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['vacancies' => 'vacancies'];

    protected const REQUIRED_FIELDS = ['vacancies'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['vacancies' => [\and_y87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancy::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryResponse::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancy> Массив вакансий */
    public array $vacancies;
}
