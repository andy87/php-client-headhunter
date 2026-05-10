<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\VacancyDrafts\Publish;

use and_y87\ClientsHh\Generated\Response\PublishVacancyFromDraftResponse as BasePublishVacancyFromDraftResponse;

/**
 * Ответ HeadHunter API [POST] /vacancies/drafts/{draft_id}/publish.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/publish-vacancy-from-draft
 *
 * @property array<int, float>|null $vacancy_ids Response field vacancy_ids
 */
class VacancyFromDraftResponse extends BasePublishVacancyFromDraftResponse
{
}
