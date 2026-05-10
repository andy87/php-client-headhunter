<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\SavedResumeSearches\Saved;

use and_y87\ClientsHh\Generated\Response\GetSavedResumeSearchResponse as BaseGetSavedResumeSearchResponse;

/**
 * Ответ HeadHunter API [GET] /saved_searches/resumes/{id}.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-saved-resume-search
 *
 * @property string $created_at Дата и время создания
 * @property string $id Идентификатор поиска
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesCountUrl $items Response field items
 * @property string $name Название поиска
 * @property \and_y87\ClientsHh\Generated\Schema\Common\IncludesCountUrl $new_items Response field new_items
 * @property bool $subscription Статус подписки
 */
class GetResumeSearchResponse extends BaseGetSavedResumeSearchResponse
{
}
