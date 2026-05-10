<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\Справочники;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetLocalesForResumePrompt;
use Andy87\ClientsHh\Generated\Response\Справочники\Locales\GetForResumeResponse;

/**
 * Группа методов "locales" раздела HeadHunter API "Справочники".
 */
class LocalesProvider extends BaseHhProvider
{
    /**
     * Список доступных локалей для резюме
     *
     * Возвращает справочник возможных локалей резюме. Подколлекция [справочника локалей](#tag/Spravochniki/operation/get-locales-for-resume).
     *
     * Изменив локаль, можно, например, создать резюме на английском языке
     *
     * OperationId: get-locales-for-resume.
     * HTTP: GET /locales/resume.
     *
     * @param GetLocalesForResumePrompt $prompt DTO запроса.
     *
     * @return GetForResumeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getForResume(GetLocalesForResumePrompt $prompt): GetForResumeResponse
    {
        /** @var GetForResumeResponse $response */
        $response = $this->request($prompt, GetForResumeResponse::class);

        return $response;
    }
}
