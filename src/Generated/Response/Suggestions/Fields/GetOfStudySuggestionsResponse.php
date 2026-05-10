<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Suggestions\Fields;

use Andy87\ClientsHh\Generated\Response\GetFieldsOfStudySuggestionsResponse as BaseGetFieldsOfStudySuggestionsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/fields_of_study.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-fields-of-study-suggestions
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsFieldsOfStudyItem> $items Информация о найденных специализациях
 */
class GetOfStudySuggestionsResponse extends BaseGetFieldsOfStudySuggestionsResponse
{
}
