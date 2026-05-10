<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\CommonDictionaries;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\GetLanguagesPrompt;
use Andy87\ClientsHh\Generated\Response\CommonDictionaries\Languages\GetResponse;

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
