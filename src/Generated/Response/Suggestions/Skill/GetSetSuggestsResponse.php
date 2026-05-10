<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Response\Suggestions\Skill;

use and_y87\ClientsHh\Generated\Response\GetSkillSetSuggestsResponse as BaseGetSkillSetSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/skill_set.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-skill-set-suggests
 *
 * @property array<int, \and_y87\ClientsHh\Generated\Schema\Common\IncludesSkillSetItem> $items Массив найденных ключевых навыков
 */
class GetSetSuggestsResponse extends BaseGetSkillSetSuggestsResponse
{
}
