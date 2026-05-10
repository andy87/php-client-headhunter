<?php

declare(strict_types=1);

namespace and_y87\ClientsHh\Generated\Provider\CommonReferenceData;

use and_y87\ClientsHh\BaseHhProvider;
use and_y87\ClientsHh\Generated\Prompt\GetLanguagesPrompt;
use and_y87\ClientsHh\Generated\Response\CommonReferenceData\Languages\GetResponse;

/**
 * Группа методов "languages" раздела HeadHunter API "Общие справочники".
 */
class LanguagesProvider extends BaseHhProvider
{
    /**
     * Список всех языков
     *
     * OperationId: get-languages.
     * HTTP: GET /languages.
     *
     * @param GetLanguagesPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetLanguagesPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
