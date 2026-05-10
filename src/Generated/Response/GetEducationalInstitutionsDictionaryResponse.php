<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /educational_institutions.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-educational-institutions-dictionary
 */
class GetEducationalInstitutionsDictionaryResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesEducationalInstitutionItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\SuggestsEducationalInstitutions::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesEducationalInstitutionItem> Информация о найденных учебных заведениях */
    public array $items;
}
