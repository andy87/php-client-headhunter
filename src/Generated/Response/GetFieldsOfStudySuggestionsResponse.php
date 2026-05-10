<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/fields_of_study.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-fields-of-study-suggestions
 */
class GetFieldsOfStudySuggestionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\SuggestsFieldsOfStudyItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\SuggestsFieldsOfStudy::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\SuggestsFieldsOfStudyItem> Информация о найденных специализациях */
    public array $items;
}
