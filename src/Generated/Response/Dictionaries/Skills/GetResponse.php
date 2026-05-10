<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Response\Dictionaries\Skills;

use Andy87\ClientsHh\Generated\Response\GetSkillsResponse as BaseGetSkillsResponse;

/**
 * Ответ HeadHunter API [GET] /skills.
 *
 * @documentation https://api.hh.ru/openapi/redoc#operation/get-skills
 *
 * @property array<int, \Andy87\ClientsHh\Generated\Schema\Common\IncludesSkillSetItem> $items Массив ключевых навыков
 */
class GetResponse extends BaseGetSkillsResponse
{
}
