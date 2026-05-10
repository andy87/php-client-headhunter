<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Подсказки\Skill;

use Andy87\ClientsHh\Generated\Response\GetSkillSetSuggestsResponse as BaseGetSkillSetSuggestsResponse;

/**
 * Ответ HeadHunter API [GET] /suggests/skill_set.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-skill-set-suggests
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesSkillSetItem> $items Массив найденных ключевых навыков
 */
class GetSetSuggestsResponse extends BaseGetSkillSetSuggestsResponse
{
}
