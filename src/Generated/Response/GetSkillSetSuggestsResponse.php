<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/skill_set.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-skill-set-suggests
 */
class GetSkillSetSuggestsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\ClientsHh\Generated\Schema\Common\IncludesSkillSetItem::class]];

    protected const MODEL = \and_y87\ClientsHh\Generated\Schema\Common\SuggestsSkillSet::class;

    /** @var array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesSkillSetItem> Массив найденных ключевых навыков */
    public array $items;
}
