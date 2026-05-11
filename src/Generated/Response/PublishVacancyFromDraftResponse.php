<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ HeadHunter API [POST] /vacancies/drafts/{draft_id}/publish.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/publish-vacancy-from-draft
 */
class PublishVacancyFromDraftResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['vacancy_ids' => 'vacancy_ids'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\VacancyDraftVacanciesDraftResponse::class;

    /** @var array<int, float>|null Response field vacancy_ids */
    public ?array $vacancy_ids = null;
}
