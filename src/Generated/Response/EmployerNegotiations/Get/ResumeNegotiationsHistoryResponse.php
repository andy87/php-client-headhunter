<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\EmployerNegotiations\Get;

use Andy87\ClientsHh\Generated\Response\GetResumeNegotiationsHistoryResponse as BaseGetResumeNegotiationsHistoryResponse;

/**
 * Ответ HeadHunter API [GET] /resumes/{resume_id}/negotiations_history.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-resume-negotiations-history
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\ResumesResumeNegotiationsHistoryVacancy> $vacancies Массив вакансий
 */
class ResumeNegotiationsHistoryResponse extends BaseGetResumeNegotiationsHistoryResponse
{
}
