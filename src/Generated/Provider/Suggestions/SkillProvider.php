<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\Suggestions;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetSkillSetSuggestsPrompt;
use and_y87\ClientsHh\Generated\Response\Suggestions\Skill\GetSetSuggestsResponse;

/**
 * Группа методов "skill" раздела HeadHunter API "Подсказки".
 */
class SkillProvider extends BaseHhProvider
{
    /**
     * Подсказки по ключевым навыкам
     *
     * OperationId: get-skill-set-suggests.
     * HTTP: GET /suggests/skill_set.
     *
     * @param GetSkillSetSuggestsPrompt $prompt DTO запроса.
     *
     * @return GetSetSuggestsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSetSuggests(GetSkillSetSuggestsPrompt $prompt): GetSetSuggestsResponse
    {
        /** @var GetSetSuggestsResponse $response */
        $response = $this->request($prompt, GetSetSuggestsResponse::class);

        return $response;
    }
}
