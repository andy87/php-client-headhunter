<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Справочники;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetSkillsPrompt;
use Andy87\ClientsHh\Generated\Response\Справочники\Skills\GetResponse;

/**
 * Группа методов "skills" раздела HeadHunter API "Справочники".
 */
class SkillsProvider extends BaseHhProvider
{
    /**
     * Справочник ключевых навыков
     *
     * Метод возвращает информацию по запрашиваемым ключевым навыкам.
     *
     * Значения в справочнике могут поменяться в любой момент
     *
     * OperationId: get-skills.
     * HTTP: GET /skills.
     *
     * @param GetSkillsPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetSkillsPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
