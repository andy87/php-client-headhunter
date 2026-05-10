<?php

declare(strict_types=1);

namespace Andy87\ClientsHh\Generated\Provider\АвторизацияПриложения;

use Andy87\ClientsHh\BaseHhProvider;
use Andy87\ClientsHh\Generated\Prompt\AuthorizePrompt;
use Andy87\ClientsHh\Generated\Response\АвторизацияПриложения\General\AuthorizeResponse;

/**
 * Группа методов "general" раздела HeadHunter API "Авторизация приложения".
 */
class GeneralProvider extends BaseHhProvider
{
    /**
     * Получение access-токена
     *
     * OperationId: authorize.
     * HTTP: POST /token.
     *
     * @param AuthorizePrompt $prompt DTO запроса.
     *
     * @return AuthorizeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function authorize(AuthorizePrompt $prompt): AuthorizeResponse
    {
        /** @var AuthorizeResponse $response */
        $response = $this->request($prompt, AuthorizeResponse::class);

        return $response;
    }
}
