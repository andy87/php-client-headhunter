<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ HeadHunter API [GET] /skills.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-skills
 */
class GetSkillsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsHh\Generated\Schema\Common\IncludesSkillSetItem::class]];

    protected const MODEL = \Andy87\ClientsHh\Generated\Schema\Common\DictionariesSkillsResponse::class;

    /** @var array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesSkillSetItem> Массив ключевых навыков */
    public array $items;
}
